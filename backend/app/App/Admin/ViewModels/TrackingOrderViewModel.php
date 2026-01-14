<?php
namespace App\App\Admin\ViewModels;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class TrackingOrderViewModel
{
	public function __construct(
		protected EloquentCollection $trackingOrders,
	) {}

	public function orders(): Collection
	{
		return $this->trackingOrders->map(function ($order) {
			$nameParts = explode(' ', trim($order->member_name));
			$lastName = end($nameParts);
			$initial = mb_substr($lastName, 0, 1);
			return (object) [
				'id'            => $order->id,
				'member_name'   => Str::title($order->member_name),
				'member_initial' => mb_strtoupper($initial),
				'drink_name'    => Str::title($order->drink_name),
				'size'         => $order->size ?? '---',
				'notes'         => $order->notes ?? '---',
				'status'         => $order->status == 1 ? 'PENDING' : 'ORDERED',
			];
		});
	}

	public function getCountTrackingOrders(): int
	{
		return $this->trackingOrders->count();
	}

	public function getDrinkSizeGroup()
	{
		return $this->trackingOrders
			->groupBy(fn($item) => $item->drink_name . '|' . $item->size)
			->map(fn($group) => (object) [
				'drink_name' => $group->first()->drink_name,
				'size'       => $group->first()->size,
				'count'   => $group->count(),
				'members'    => $group->pluck('member_name')->implode(', '),
			])
			->values(); // Reset lại key của array
	}
}