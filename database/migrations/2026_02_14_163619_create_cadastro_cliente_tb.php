<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Constants\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        if(!Schema::hasTable(Table::CLIENTES))
            {
            Schema::create(Table::CLIENTES, function (Blueprint $table) {
            $table->id();
            $table->string('Razao_Social');
            $table->string('Nome_Fantasia');
            $table->string('CNPJ')->unique();
            $table->string('IE');
            $table->string('Endereco');
            $table->timestamps();
            });
        };
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Table::CLIENTES);
    }
};
