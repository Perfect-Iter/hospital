<?php

namespace App\Admin\Controllers;

use App\Models\Doctor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DoctorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Doctor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Doctor());

        $grid->column('id', __('Id'));
        $grid->column('Fname', __('Fname'));
        $grid->column('Sname', __('Sname'));
        $grid->column('birth_date', __('Birth date'));
        $grid->column('gender', __('Gender'));
        $grid->column('contact', __('Contact'));
        $grid->column('address', __('Address'));
        $grid->column('experience', __('Experience'));
        $grid->column('specialization', __('Specialization'));
        $grid->column('region', __('Region'));
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
        $show = new Show(Doctor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Fname', __('Fname'));
        $show->field('Sname', __('Sname'));
        $show->field('birth_date', __('Birth date'));
        $show->field('gender', __('Gender'));
        $show->field('contact', __('Contact'));
        $show->field('address', __('Address'));
        $show->field('experience', __('Experience'));
        $show->field('specialization', __('Specialization'));
        $show->field('region', __('Region'));
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
        $form = new Form(new Doctor());

        $form->text('Fname', __('Fname'));
        $form->text('Sname', __('Sname'));
        $form->date('birth_date', __('Birth date'))->default(date('Y-m-d'));
        $form->text('gender', __('Gender'));
        $form->number('contact', __('Contact'));
        $form->text('address', __('Address'));
        $form->number('experience', __('Experience'));
        $form->text('specialization', __('Specialization'));
        $form->text('region', __('Region'));

        return $form;
    }
}
