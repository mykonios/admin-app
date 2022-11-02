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
        DB::unprepared("CREATE TRIGGER tg_audit_roles BEFORE UPDATE ON roles
          FOR EACH ROW
        BEGIN
            IF OLD.date_audit <> NEW.date_audit THEN
            INSERT INTO 
              audit_roles
              (
                id,
                name,
                guard_name,
                status_id,
                user_id,
                created_at,
                updated_at,
                deleted_at,
                date_audit
              ) 
                SELECT * FROM roles WHERE id = OLD.id;
            END IF;    
        END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER tg_audit_roles');
    }
}
