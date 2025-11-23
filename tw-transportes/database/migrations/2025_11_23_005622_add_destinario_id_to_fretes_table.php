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
        Schema::table('fretes', function (Blueprint $table) {

            // adiciona a coluna destinario_id
            $table->unsignedBigInteger('destinario_id')
                  ->nullable()
                  ->after('cliente_id');

            // adiciona também a coluna remetente_id
            $table->unsignedBigInteger('remetente_id')
                  ->nullable()
                  ->after('destinario_id');

            // Relacionamentos opcionais (descomente se quiser)
            //
            // $table->foreign('destinario_id')
            //     ->references('id')->on('clientes')
            //     ->onDelete('set null');
            //
            // $table->foreign('remetente_id')
            //     ->references('id')->on('clientes')
            //     ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fretes', function (Blueprint $table) {

            // caso tenha criado as foreign keys
            // $table->dropForeign(['destinario_id']);
            // $table->dropForeign(['remetente_id']);

            // remove as colunas
            $table->dropColumn('destinario_id');
            $table->dropColumn('remetente_id');
        });
    }
};
