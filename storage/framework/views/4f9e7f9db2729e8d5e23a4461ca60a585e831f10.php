<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">

    <h1>Edit Project</h1>

    <?php echo Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', $project->title, ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', $project->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>

        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/projects/edit.blade.php */ ?>