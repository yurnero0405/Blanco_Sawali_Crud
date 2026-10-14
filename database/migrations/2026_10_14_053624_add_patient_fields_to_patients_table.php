
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('patient_number', 50)->unique();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('birth_date');
            $table->enum('sex', ['Male', 'Female']);
            $table->string('contact_number', 30)->nullable();
            $table->text('address')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropUnique(['patient_number']);
            $table->dropColumn([
                'patient_number',
                'first_name',
                'last_name',
                'birth_date',
                'sex',
                'contact_number',
                'address',
            ]);
        });
    }
};
