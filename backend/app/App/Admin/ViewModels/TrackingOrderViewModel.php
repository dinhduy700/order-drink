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
			return (object) [
				'id'            => $order->id,
				'member_name'   => data_get(config('users')[(int) $order->user_id], 'name'),
				'chatwork_room_id_with_bot'   => data_get(config('users')[(int) $order->user_id], 'chatwork_room_id_with_bot'),
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
				'members'    => data_get(config('users')[(int) $group->first()->user_id], 'name')

			])
			->values(); // Reset lại key của array
	}
}