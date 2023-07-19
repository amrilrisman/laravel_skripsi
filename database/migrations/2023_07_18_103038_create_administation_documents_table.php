<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministationDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administation_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_user");
            $table->string("title")->default("")->nullable();
            $table->string("description")->default("")->nullable();
            $table->string("status")->default(0);
            $table->string("verifiasi_rt")->nullable()->default(null);
            $table->string("verifiasi_rw")->nullable()->default(null);
            $table->string("verifiasi_asn")->nullable()->default(null);
            $table->string("text_note")->nullable()->default(null);
            $table->boolean("approve_file")->nullable()->default(false);
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
        Schema::dropIfExists('administation_documents');
    }
}
