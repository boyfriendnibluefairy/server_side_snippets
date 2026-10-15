<?php

use Illuminate\Support\Facades\Route;

// original
// Route::get('/', function () {
//     return view('welcome');
// });

// GMO: create table
Route::get('/', function () {

    //     Schema::dropIfExists("table_users");
    //     Schema::create("table_users", function($newtable){
    //     $newtable->increments("id");
    //     $newtable->string("name");
    //     $newtable->string("email")->unique();
    //     $newtable->string("password");
    //     $newtable->boolean("is_admin");
    //     $newtable->timestamp("email_verified_at")->nullable();
    //     $newtable->string("remember_token");
    //     $newtable->timestamps();
    // });

    // Schema::dropIfExists("table_travel_videos");
    // Schema::create("table_travel_videos", function($newtable){
    //     $newtable->increments("id"); // video id
    //     $newtable->foreignId("user_id")->constrained()->onDelete("cascade"); // owner
    //     $newtable->string("title"); // video title
    //     $newtable->string("slug"); // URL-friendly identifier
    //     $newtable->text("description")->nullable(); // video description
    //     $newtable->string("video_url", 2048); // location of video file
    //     $newtable->string("thumbnail_url", 2048)->nullable(); // thumbnail location
    //     $newtable->string("country", 100); // country visited
    //     $newtable->string("location"); // city or place visited
    //     $newtable->date("filmed_at")->nullable(); // date filmed
    //     $newtable->unsignedInteger("duration_seconds")->nullable(); // video length or duration
    //     $newtable->unsignedBigInteger("view_count")->default(0); // view counter default is 0
    //     $newtable->string("status", 20); // draft or published
    //     $newtable->timestamp("published_at")->nullable(); // publication date
    //     $newtable->timestamp("cretead_at"); // creation of record
    //     $newtable->timestamp("updated_at"); // last update
    // });

    // Schema::dropIfExists("table_publictions"); // This table records the physics section part which is similar to my Google scholar publication lists.
    // Schema::create("table_publications", function($newtable){
    //     $newtable->increments("id"); //publication id
    //     $newtable->foreignId("user_id")->contrained()->onDelete("cascade"); //owner
    //     $newtable->string("title", 500); // publication title
    //     $newtable->string("slug", 255)->unique(); // URL identifier
    //     $newtable->text("authors"); // author names
    //     $newtable->text("abstract")->nullable(); // publication abstract
    //     $newtable->string("journal")->nullable(); // journal or conference
    //     $newtable->unsignedSmallInteger("publication_year");
    //     $newtable->string("pdf_url", 2048)->nullable(); // PDF link if there's any
    //     $newtable->unsignedInteger("citation_count")->nullable();
    //     $newtable->timestamp("created_at"); // creation date
    //     $newtable->timestamp("updated_at"); // last update
    // });

    // Schema::dropIfExists("table_software_projects");
    // Schema::create("table_software_projects", function($newtable){
    //     $newtable->increments("id"); // project id
    //     $newtable->foreignId("user_id")->constrained()->onDelete("cascade"); // owner
    //     $newtable->string("name"); // software name
    //     $newtable->string("slug")->unique(); // URL identifier
    //     $newtable->text("description"); // project description
    //     $newtable->json("technology_stack")->nullable(); // Swift, PHP, Python, etc.
    //     $newtable->string("github_url", 2048)->nullable(); // github repository
    //     $newtable->string("app_store_url", 2048)->nullable(); // Apple app store
    //     $newtable->string("website_url", 2048)->nullable(); // project website
    //     $newtable->string("thumbnail_url", 2048)->nullable(); // project thumbnail
    //     $newtable->string("status", 20); // draft or published
    //     $newtable->timestamp("created_at");
    //     $newtable->timestamp("updated_at");
    // });

    // Schema::dropIfExists("table_articles");
    // Schema::create("table_articles", function($newtable){
    //     $newtable->increments("id"); // article id
    //     $newtable->foreignId("user_id")->constrained()->onDelete("cascade"); // author
    //     $newtable->foreignId("category_id")->nullable(); // article category
    //     $newtable->string("title"); // article title
    //     $newtable->string("slug")->unique(); // URL identifier
    //     $newtable->text("excerpt")->nullable(); // short preview
    //     $newtable->longText("body"); // full article element
    //     $newtable->string("thumbnail_url", 2048)->nullable();
    //     $newtable->string("status", 20); // draft or published
    //     $newtable->timestamp("published_at")->nullable();
    //     $newtable->timestamp("created_at");
    //     $newtable->timestamp("updated_at");
    // });

    // Schema::dropIfExists("table_categories");
    // Schema::create("table_categories", function($newtable){
    //     $newtable->increments("id"); // category id
    //     $newtable->string("name", 100)->unique(); // category name
    //     $newtable->string("slug", 100)->unique(); // URL identifier
    //     $newtable->text("description")->nullable(); // description
    //     $newtable->timestamp("created_at");
    //     $newtable->timestamp("updated_at");
    // });

    Schema::dropIfExists("table_media_assets");
    Schema::create("table_media_assets", function($newtable){
        $newtable->increments("id"); // Media ID
        $newtable->foreignId("user_id")->constrained()->onDelete("cascade"); // uploader
        $newtable->string("filename"); // original filename
        $newtable->string("storage_path", 2048); // stored file location
        $newtable->string("disk", 100); // laravel storage disk
        $newtable->string("mime_type", 100); // File MIME type
        $newtable->unsignedBigInteger("size_bytes"); // file size
        $newtable->timestamp("created_at");
        $newtable->timestamp("updated_at");
    });

    return view('welcome');
});
