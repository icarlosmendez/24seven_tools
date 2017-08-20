<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Repositories\TaskRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TaskController extends AppBaseController
{
    /** @var  TaskRepository */
    private $taskRepository;

    public function __construct(TaskRepository $taskRepo)
    {
        $this->taskRepository = $taskRepo;
    }

    /**
     * Display a listing of the Task.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->taskRepository->pushCriteria(new RequestCriteria($request));
        // $tasks = $this->taskRepository->all();
        $tasks = DB::table('tasks')->orderBy('due_date', 'asc')->get();

        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new Task.
     *
     * @return Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created Task in storage.
     *
     * @param CreateTaskRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskRequest $request)
    {
        $input = $request->all();

        $task = $this->taskRepository->create($input);

        Flash::success('Task saved successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified Task.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $task = $this->taskRepository->findWithoutFail($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified Task.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $task = $this->taskRepository->findWithoutFail($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the content of the specified Task in storage.
     *
     * @param  int              $id
     * @param UpdateTaskRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskRequest $request)
    {
        $task = $this->taskRepository->findWithoutFail($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        $task = $this->taskRepository->update($request->all(), $id);

        Flash::success('Task updated successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Update the row position of specified Task in storage.
     *
     * @param  int              $id
     * @param UpdateTaskRequest $request
     *
     * @return Response
     */
    // public function updateRowPosition($id, UpdateTaskRequest $request)
    // {
    //     $task = $this->taskRepository->findWithoutFail($id);

    //     if (empty($task)) {
    //         Flash::error('Task not found');

    //         return redirect(route('tasks.index'));
    //     }

    //     $sectionids = $_POST['sectionid'];
    //     $count = 1;

    //     if (is_array($sectionids) 
    //     {
    //         foreach ($sectionids as $sectionid) 
    //         {
    //             $id  = "Update sections SET display_order = $count";
    //             $id .= " Where id='".$sectionid."'";

    //             $task = $this->taskRepository->update($request->all(), $id);

    //             $count++;
    //         }
    //     })

        

    //     Flash::success('Task updated successfully.');

    //     return redirect(route('tasks.index'));
    // }

    /**
     * Remove the specified Task from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $task = $this->taskRepository->findWithoutFail($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        $this->taskRepository->delete($id);

        Flash::success('Task deleted successfully.');

        return redirect(route('tasks.index'));
    }
}
