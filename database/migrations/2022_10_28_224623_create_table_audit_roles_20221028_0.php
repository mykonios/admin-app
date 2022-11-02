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
        Schema::table('audit_roles', function (Blueprint $table) {
            $table->increments('audit_id');
            $table->bigInteger('id');

            $table->string('name', 255)->nullable()->default(null)->comments('Nome do Perfil');
            $table->string('guard_name', 255)->nullable()->default(null)->comments('guard_name');

            $table->integer('status_id')->nullable()->default(null)->comments('Status do Perfil do Usuário')->after('guard_name');
            $table->integer('user_id')->nullable()->default(null)->comments('Usuário que efetuou a ação')->after('status_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable()->default(NULL)->comments('Data exclusão do registro');
            $table->timestamp('date_audit')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comments('Data verificação da auditoria');

            $table->index(['status_id']);
            $table->index(['user_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
