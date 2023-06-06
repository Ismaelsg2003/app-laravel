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
        Schema::table('productos', function (Blueprint $table) {
            $table->string('nombreproducto', 30)->unique()->change();
            $table->text('descripcion')->nullable()->change();
            
            $table->after('descripcion', function($table){
                $table->foreignId('categoria_id')->constrained('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            });

            // $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropUnique('productos_nombreproducto_unique');
            $table->dropForeign('productos_categoria_id_foreign');
            $table->dropColumn('categoria_id');
        });
    }
};
