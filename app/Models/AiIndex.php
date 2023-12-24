<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	class AiIndex extends Model
	{
		use HasFactory;

		protected $table = 'ai_index';

		protected $fillable = [
			'name',
			'source',
			'description',
			'url',
			'image',
			'long_description',
			'icon',
			'screenshot',
			'website',
			'website_url',
			'launch_date',
			'category',
			'prompts',
			'use_case',
			'primary_task',
			'pros',
			'cons',
			'qna',
			'people_search',
			'impacted_jobs',
		];
	}
