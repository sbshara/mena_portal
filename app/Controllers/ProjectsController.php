<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers;

use \App\Models\Project;
use \App\Models\ProjectTask;

use App\Models\ProjectTaskStatusOptions;
use Respect\Validation\Validator as v;


class ProjectsController extends Controller {

    /*
     * @param $request
     * @param $response
     * @param $args
     */

    /*
        ########################## PROJECTS ##################################
    */

    public function ProjectIndex ($request, $response, $args) {
        return $this->view->render($response, 'auth/Projects/ProjectHome.twig');
    }

    public function getNewProject ($request, $response, $args) {
        return $this->view->render($response, 'auth/Projects/NewProject.twig');
    }

    public function postNewProject ($request, $response, $args) {
        // Validation

        // Validation Test

        // Submit the data
    }

    public function getAllProjects ($request, $response, $args) {

        $page       = isset($args['page']) ?: 1;
        $perPage    = isset($args['perPage']) ?: 20;
        $Projects = Project::all();
        return $this->view->render($response, 'auth/Projects/AllProjects.twig', compact('Projects'));
    }

    public function getProjectById ($request, $response, $args) {
        $Project = Project::where('id', $args['project_id'])->get()->first();
        return $this->view->render($response, 'auth/Projects/ProjectById.twig', compact('Project'));
    }

    public function postProjectById ($request, $response, $args) {
        // Validation

        // Validation Test

        // Submit the data
    }

    public function deleteProjectById ($request, $response, $args) {

        // Validation

        // Validation Test

        // Delete the record

    }

    // -------------- . END OF PROJECTS . --------------




    /*
        ########################### TASKS ####################################
    */
    public function TaskIndex ($request, $response, $args) {
        return $this->view->render($response, 'auth/Projects/TaskHome.twig');
    }

    public function getAllTasks ($request, $response, $args) {
        $page       = $args['page'];
        $perPage    = $args['perPage'];
        $Tasks = ProjectTask::skip($page)->limit($perPage)->get();
        return $this->view->render($response, 'auth/Projects/AllTasks.twig', compact('Tasks'));
    }

    public function getTasksByProjectId ($request, $response, $args) {
        $ProjectTasks = ProjectTask::where('projectid', $args['project_id'])->get();
        return $this->view->render($response, 'auth/Projects/TaskByProjectId.twig', compact('ProjectTasks'));
    }

    public function getTaskById ($request, $response, $args) {
        $Task = ProjectTask::where('id', $args['task_id'])->get()->first();
        return $this->view->render($response, 'auth/Projects/TaskById.twig', compact('Task'));
    }

    public function postTaskById ($request, $response, $args) {
        // Validation

        // Validation Test

        // Submit the data
    }

    public function deleteTaskById ($request, $response, $args) {
        // Validation

        // Validation Test

        // Delete the record
    }

    public function getNewTask ($request, $response, $args) {
        $Project = Project::where('id', $args['project_id']);
        return $this->view->render($response, 'auth/Projects/NewTask.twig', compact('Project'));
    }

    public function postNewTask ($request, $response, $args) {

        // Validation

        // Validation Test

        // Submit the data

    }

    // -------------- . END OF TASKS . --------------




}
