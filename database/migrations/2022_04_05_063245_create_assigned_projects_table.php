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
        Schema::create('assigned_projects', function (Blueprint $table) {
            $table->id('assignedProjectId'); 
            $table->date('assignedDate')->useCurrent();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('employeeId')->on('employees');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('projectId')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigned_projects');
    }
};
