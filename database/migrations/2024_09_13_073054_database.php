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
       
        Schema::create('social_medias', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('name')->unique();
            $table->string('icon');
            $table->boolean("status")->default(1);
            $table->double("service_fee");
            $table->uuid('created_by'); // Foreign key column (UUID)
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('payment_agents', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('name')->unique();
            $table->string('icon');
            $table->string('account_number');
            $table->boolean("status")->default(1);
            $table->uuid('created_by'); // Foreign key column (UUID)
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid('user_id'); // Foreign key column (UUID)
            $table->double("deposite_amount");
            $table->string("transaction_code")->unique();
            $table->uuid('approved_by')->nullable(); // Foreign key column (UUID)
            $table->dateTime('approved_at')->nullable(); 

            $table->uuid('rejected_by')->nullable(); // Foreign key column (UUID)
            $table->dateTime('rejected_at')->nullable();
            $table->string('reject_reason')->nullable();

            $table->uuid('payment_agent_id'); // Foreign key column (UUID)

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rejected_by')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('payment_agent_id')->references('id')->on('payment_agents')->onDelete('cascade');

            $table->timestamps();
        });


        Schema::create('services', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('name')->unique();
            $table->boolean("status")->default(1);
            $table->uuid('created_by'); // Foreign key column (UUID)
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });



        Schema::create('social_media_services', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid('social_media_id');
            $table->uuid('service_id');
            $table->integer("max_number");
            $table->integer("min_number");
            $table->string('start_time');
            $table->string('acceptable_link')->nullable();
            $table->double('FeePerOne');
            $table->uuid('created_by'); // Foreign key column (UUID)
            $table->string('description',1000);
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('social_media_id')->references('id')->on('social_medias')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('service_order', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->uuid('user_id'); // Foreign key column (UUID)
            $table->uuid('sms_id');

            $table->string('link');
            $table->integer("quantity");
            $table->double('FeePerOne');
            $table->double('total_fee');

            $table->uuid('approved_by')->nullable(); // Foreign key column (UUID)
            $table->dateTime('approved_at')->nullable(); 

            $table->uuid('rejected_by')->nullable(); // Foreign key column (UUID)
            $table->dateTime('rejected_at')->nullable();
            $table->string('reject_reason')->nullable();



            $table->boolean('is_completed')->default(0);
            $table->uuid('completed_by')->nullable(); // Foreign key column (UUID)

            $table->dateTime('completed_at')->nullable(); 

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('sms_id')->references('id')->on('social_media_services')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rejected_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('completed_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });


        Schema::create('selling_order', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->uuid('user_id'); // Foreign key column (UUID)
            $table->uuid('social_media_id');

            $table->string('type');   // page or  channel or group
            $table->string('link');
            $table->integer("follower_number");
            $table->double("selling_price");

            $table->string("media_image");
            $table->string("media_name");
            $table->string('media_description');

            $table->double("service_fee");

            $table->uuid('approved_by')->nullable(); // Foreign key column (UUID)
            $table->dateTime('approved_at')->nullable(); 

            $table->uuid('rejected_by')->nullable(); // Foreign key column (UUID)
            $table->dateTime('rejected_at')->nullable();
            $table->string('reject_reason')->nullable();


            $table->boolean('is_completed')->default(0);
            $table->uuid('completed_by')->nullable(); // Foreign key column (UUID)
            $table->dateTime('completed_at')->nullable(); 

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('social_media_id')->references('id')->on('social_medias')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rejected_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('completed_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });









    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
