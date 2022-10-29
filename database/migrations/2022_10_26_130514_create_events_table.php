<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("events", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->enum("status", [
                "draft",
                "published",
                "archived",
                "deleted",
                "hidden",
                "cancelled",
                "suspended",
                "expired",
                "completed",
                "moved",
                "postponed",
                "rescheduled",
                "sold_out",
                "cancelled",
                "moved_online",
                "moved_offline",
                "unknown",
                "pending",
            ]);
            $table->date("start_date");
            $table->date("end_date")->nullable();
            $table->boolean("all_day");
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
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
        Schema::dropIfExists("events");
    }
};