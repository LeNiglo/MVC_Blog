<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $canCreatePost = Permission::create([
            'name' => 'post-create',
            'display_name' => 'Post Create',
            'description' => 'Create Posts',
        ]);
        $canEditPost = Permission::create([
            'name' => 'post-edit',
            'display_name' => 'Post Edit',
            'description' => 'Edit Posts',
        ]);
        $canDeletePost = Permission::create([
            'name' => 'post-delete',
            'display_name' => 'Post Delete',
            'description' => 'Delete Posts',
        ]);
        $canEditOtherPost = Permission::create([
            'name' => 'other-post-edit',
            'display_name' => 'Other Post Edit',
            'description' => 'Edit Posts from Others',
        ]);
        $canDeleteOtherPost = Permission::create([
            'name' => 'other-post-delete',
            'display_name' => 'Other Post Delete',
            'description' => 'Delete Posts from Others',
        ]);
        $canCreateComment = Permission::create([
            'name' => 'comment-create',
            'display_name' => 'Comment Create',
            'description' => 'Create Comments',
        ]);
        $canEditComment = Permission::create([
            'name' => 'comment-edit',
            'display_name' => 'Comment Edit',
            'description' => 'Edit Comments',
        ]);
        $canDeleteComment = Permission::create([
            'name' => 'comment-delete',
            'display_name' => 'Comment Delete',
            'description' => 'Delete Comments',
        ]);
        $canEditOtherComment = Permission::create([
            'name' => 'other-comment-edit',
            'display_name' => 'Other Comment Edit',
            'description' => 'Edit Comments from Others',
        ]);
        $canDeleteOtherComment = Permission::create([
            'name' => 'other-comment-delete',
            'display_name' => 'Other Comment Delete',
            'description' => 'Delete Comments from Others',
        ]);
        $canLockUser = Permission::create([
            'name' => 'user-lock',
            'display_name' => 'User Lock',
            'description' => 'Lock Users',
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'GOD ONLY KNOWS',
        ]);

        $admin->attachPermissions([
            $canEditOtherPost,
            $canDeleteOtherPost,
            $canEditOtherComment,
            $canDeleteOtherComment,
            $canLockUser,
        ]);

        $blogger = Role::create([
            'name' => 'blogger',
            'display_name' => 'Blogger',
            'description' => 'I write stuff.',
        ]);

        $blogger->attachPermissions([
            $canCreatePost,
            $canEditPost,
            $canDeletePost,
            $canDeleteOtherComment,
        ]);

        $commentator = Role::create([
            'name' => 'commentator',
            'display_name' => 'Commentator',
            'description' => 'I hate and love stuff ...',
        ]);

        $commentator->attachPermissions([
            $canCreateComment,
            $canEditPost,
            $canDeletePost,
        ]);
    }
}
