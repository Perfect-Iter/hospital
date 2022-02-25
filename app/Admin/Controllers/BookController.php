<?php

namespace App\Admin\Controllers;

use App\Models\Book;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BookController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Book';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Book());

        $grid->column('id', __('Id'));
        $grid->column('patient_id', __('Patient id'));
        $grid->column('clinic_id', __('Clinic id'));
        $grid->column('doctor_id', __('Doctor id'));
        $grid->column('dov', __('Dov'));
        $grid->column('book_time', __('Book time'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Book::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('patient_id', __('Patient id'));
        $show->field('clinic_id', __('Clinic id'));
        $show->field('doctor_id', __('Doctor id'));
        $show->field('dov', __('Dov'));
        $show->field('book_time', __('Book time'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Book());

        $form->number('patient_id', __('Patient id'));
        $form->number('clinic_id', __('Clinic id'));
        $form->number('doctor_id', __('Doctor id'));
        $form->date('dov', __('Dov'))->default(date('Y-m-d'));
        $form->time('book_time', __('Book time'))->default(date('H:i:s'));
        $form->text('status', __('Status'));

        return $form;
    }
}
