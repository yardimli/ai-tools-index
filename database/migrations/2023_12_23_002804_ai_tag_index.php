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
			Schema::create('ai_tag_index', function (Blueprint $table) {
				$table->id();
				$table->integer('ai_index_id')->default(0)->index();
				$table->integer('ai_tag_id')->default(0)->index();
				$table->timestamps();
			});
		}

		/**
		 * Reverse the migrations.
		 */
		public function down(): void
		{
			Schema::dropIfExists('ai_tag_index');
		}
	};
