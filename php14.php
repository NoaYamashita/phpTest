<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateHistories01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories01', function (Blueprint $table) {
        Schema::create('history01s', function (Blueprint $table) {
            $table->id();
            $table->integer('profile_id');
            $table->string('edited_at');
@@ -28,6 +28,6 @@ public function up()
     */
    public function down()
    {
        Schema::dropIfExists('histories01');
        Schema::dropIfExists('history01s');
    }
}
