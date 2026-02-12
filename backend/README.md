teams
- id (PK)
- name
- created_at
- updated_at

users
- id (PK)
- team_id (FK -> teams.id)
- name
- email (nullable)
- is_active (boolean)
- created_at
- updated_at


stores
- id (PK)
- name            -- Highlands, Phúc Long
- shopee_food_url -- link menu
- is_active
- created_at
- updated_at


drinks
- id (PK)
- store_id (FK -> stores.id)
- name
- base_price
- is_active
- created_at
- updated_at


drink_orders
- id (PK)
- team_id (FK -> teams.id)
- store_id (FK -> stores.id)
- order_date      -- 2026-01-11
- order_time      -- 15:00
- note            -- ghi chú chung
- created_by      -- user_id (người tạo order)
- status          -- open / closed / ordered / cancelled
- created_at
- updated_at


drink_order_items
- id (PK)
- drink_order_id (FK -> drink_orders.id)
- user_id (FK -> users.id)
- drink_name      -- text (phòng khi menu thay đổi)
- size            -- M / L / null
- sugar_level     -- 0% / 50% / 100%
- ice_level       -- ít đá / bình thường
- quantity        -- default = 1
- unit_price
- total_price
- note            -- thêm topping, ghi chú
- created_at
- updated_at


-------------
``` database/migrations/2026_01_11_000001_create_teams_table.php ```

```
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::create('teams', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});
}

    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
```

` database/migrations/2026_01_11_000002_add_team_id_to_users_table.php `

```
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::table('users', function (Blueprint $table) {
$table->foreignId('team_id')
->nullable()
->after('id')
->constrained()
->nullOnDelete();
});
}

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['team_id']);
            $table->dropColumn('team_id');
        });
    }
};
```

``` database/migrations/2026_01_11_000003_create_stores_table.php ```

```
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::create('stores', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->string('shopee_food_url')->nullable();
$table->boolean('is_active')->default(true);
$table->timestamps();
});
}

    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
```

``` database/migrations/2026_01_11_000004_create_drinks_table.php ```

```
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::create('drinks', function (Blueprint $table) {
$table->id();
$table->foreignId('store_id')
->constrained()
->cascadeOnDelete();

            $table->string('name');
            $table->integer('base_price')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drinks');
    }
};
```


``` database/migrations/2026_01_11_000005_create_drink_orders_table.php ```

```
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::create('drink_orders', function (Blueprint $table) {
$table->id();

            $table->foreignId('team_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('store_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->date('order_date');
            $table->time('order_time')->nullable();

            $table->enum('status', ['open', 'closed', 'ordered', 'cancelled'])
                ->default('open');

            $table->foreignId('created_by')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->text('note')->nullable();
            $table->timestamps();

            $table->unique(['team_id', 'order_date']); // mỗi team 1 order/ngày
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drink_orders');
    }
};
```

``` database/migrations/2026_01_11_000006_create_drink_order_items_table.php ```

```
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::create('drink_order_items', function (Blueprint $table) {
$table->id();

            $table->foreignId('drink_order_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('drink_name');
            $table->string('size')->nullable();
            $table->string('sugar_level')->nullable();
            $table->string('ice_level')->nullable();

            $table->integer('quantity')->default(1);
            $table->integer('unit_price')->nullable();
            $table->integer('total_price')->nullable();

            $table->text('note')->nullable();
            $table->timestamps();

            $table->unique(['drink_order_id', 'user_id']); // 1 người 1 dòng
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drink_order_items');
    }
};

```
