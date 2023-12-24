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
			Schema::table('ai_index', function (Blueprint $table) {
				$table->text('long_description')->nullable();
				$table->string('icon', 255)->nullable();
				$table->string('screenshot', 255)->nullable();
				$table->string('website', 255)->nullable();
				$table->string('website_url', 255)->nullable();
				$table->string('launch_date', 255)->nullable();
				$table->string('category', 255)->nullable();

				$table->text('prompts')->nullable();
				$table->text('use_case')->nullable();
				$table->text('primary_task')->nullable();
				$table->text('pros')->nullable();
				$table->text('cons')->nullable();
				$table->text('qna')->nullable();
				$table->text('people_search')->nullable();
				$table->text('impacted_jobs')->nullable();
			});
		}

		/**
		 * Reverse the migrations.
		 */
		public function down(): void
		{
			Schema::table('ai_index', function (Blueprint $table) {
				$table->dropColumn('long_description');
				$table->dropColumn('icon');
				$table->dropColumn('screenshot');
				$table->dropColumn('website');
				$table->dropColumn('website_url');
				$table->dropColumn('launch_date');
				$table->dropColumn('category');

				$table->dropColumn('prompts');
				$table->dropColumn('use_case');
				$table->dropColumn('primary_task');
				$table->dropColumn('pros');
				$table->dropColumn('cons');
				$table->dropColumn('qna');
				$table->dropColumn('people_search');
				$table->dropColumn('impacted_jobs');
			});
		}
	};
