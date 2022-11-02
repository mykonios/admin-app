<?php

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
        Schema::table('roles', function (Blueprint $table) {
            $table->integer('status_id')->nullable()->default(null)->comments('Status do Perfil do Usu�rio')->after('guard_name');
            $table->integer('user_id')->nullable()->default(null)->comments('Usu�rio que efetuou a a��o')->after('status_id');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comments('Data exclus�o do registro')->after('created_at')->change();
            $table->timestamp('deleted_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comments('Data exclus�o do registro');
            $table->timestamp('date_audit')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comments('Data verifica��o da auditoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_id');
        Schema::dropIfExists('user_id');
        Schema::dropIfExists('deleted_at');
        Schema::dropIfExists('date_audit');
    }
};
