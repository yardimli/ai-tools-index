<?php

	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;

	return new class extends Migration {
		/**
		 * Run the migrations.
		 */
		public function up(): void
		{
			Schema::create('ai_index', function (Blueprint $table) {
				$table->id();
				$table->string('name',255)->index();
				$table->string('source',64)->index();
				$table->text('description')->nullable()->index();
				$table->string('url',255)->nullable();
				$table->string('image',255)->nullable();
				$table->timestamps();
			});
		}

		/**
		 * Reverse the migrations.
		 */
		public function down(): void
		{
			Schema::dropIfExists('ai_index');
		}
	};
