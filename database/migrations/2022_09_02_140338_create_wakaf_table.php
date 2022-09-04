<?php

use App\Models\TransactionModel;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wakaf', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('amount');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(TransactionModel::class, "transaction_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wakaf');
    }
};
