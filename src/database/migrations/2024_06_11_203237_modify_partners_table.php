<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropPrimary(['basic_cnpj']);
            $table->unique(['basic_cnpj', 'partner_identifier', 'cnpj_cpf_partner']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropUnique(['basic_cnpj', 'partner_identifier', 'cnpj_cpf_partner']);
            $table->primary('basic_cnpj');
        });
    }
};
