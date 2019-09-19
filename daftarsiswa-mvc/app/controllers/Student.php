<?php

class Student extends Controller
{
    public function index()
    {
        $data['title'] = 'List of Students';
        $data['students'] = $this->model('Student_m')->getAllStudents();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail';
        $data['student'] = $this->model('Student_m')->getStudentById($id);
        $this->view('templates/header', $data);
        $this->view('student/detail', $data);
        $this->view('templates/footer');
    }

    public function add_student()
    {
        if ($this->model('Student_m')->addStudentData($_POST) > 0) {
            Flasher::setFlash('Successfully', 'added', 'success');
            header('Location: ' . BASE_URL . 'student');
            exit;
        } else {
            Flasher::setFlash('Failed', 'to add', 'danger');
            header('Location: ' . BASE_URL . 'student');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Student_m')->deleteStudentData($id) > 0) {
            Flasher::setFlash('Successfully', 'deleted', 'success');
            header('Location: ' . BASE_URL . 'student');
            exit;
        } else {
            Flasher::setFlash('Failed', 'to delete', 'danger');
            header('Location: ' . BASE_URL . 'student');
            exit;
        }
    }

    public function geteditdata()
    {
        echo json_encode($this->model('Student_m')->getStudentById($_POST['id']));
    }

    public function edit()
    {
        if ($this->model('Student_m')->editStudentData($_POST) > 0) {
            Flasher::setFlash('Successfully', 'changed', 'success');
            header('Location: ' . BASE_URL . 'student');
            exit;
        } else {
            Flasher::setFlash('Failed', 'to change', 'danger');
            header('Location: ' . BASE_URL . 'student');
            exit;
        }
    }

    public function search()
    {
        $data['title'] = 'List of Students';
        $data['students'] = $this->model('Student_m')->searchStudentData();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
    }
}
