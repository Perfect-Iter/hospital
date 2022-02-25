<?php

namespace App\Admin\Controllers;

use App\Models\Patient;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PatientController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Patient';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Patient());

        $grid->column('id', __('Id'));
        $grid->column('Fname', __('Fname'));
        $grid->column('Sname', __('Sname'));
        $grid->column('birth_date', __('Birth date'));
        $grid->column('gender', __('Gender'));
        $grid->column('email', __('Email'));
        $grid->column('password', __('Password'));
        $grid->column('contact', __('Contact'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Patient::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Fname', __('Fname'));
        $show->field('Sname', __('Sname'));
        $show->field('birth_date', __('Birth date'));
        $show->field('gender', __('Gender'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
        $show->field('contact', __('Contact'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Patient());

        $form->text('Fname', __('Fname'));
        $form->text('Sname', __('Sname'));
        $form->date('birth_date', __('Birth date'))->default(date('Y-m-d'));
        $form->text('gender', __('Gender'));
        $form->email('email', __('Email'));
        $form->password('password', __('Password'));
        $form->number('contact', __('Contact'));

        return $form;
    }
}
