<?php

namespace App\Http\Controllers;

use App\DataTables\PeringatanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePeringatanRequest;
use App\Http\Requests\UpdatePeringatanRequest;
use App\Repositories\PeringatanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PeringatanController extends AppBaseController
{
    /** @var  PeringatanRepository */
    private $peringatanRepository;

    public function __construct(PeringatanRepository $peringatanRepo)
    {
        $this->peringatanRepository = $peringatanRepo;
    }

    /**
     * Display a listing of the Peringatan.
     *
     * @param PeringatanDataTable $peringatanDataTable
     * @return Response
     */
    public function index(PeringatanDataTable $peringatanDataTable)
    {
        // dd($peringatanDataTable->render('peringatans.index'));
        return $peringatanDataTable->render('peringatans.index');
    }

    /**
     * Show the form for creating a new Peringatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('peringatans.create');
    }

    /**
     * Store a newly created Peringatan in storage.
     *
     * @param CreatePeringatanRequest $request
     *
     * @return Response
     */
    public function store(CreatePeringatanRequest $request)
    {
        $input = $request->all();

        $peringatan = $this->peringatanRepository->create($input);

        Flash::success('Peringatan saved successfully.');

        return redirect(route('peringatans.index'));
    }

    /**
     * Display the specified Peringatan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $peringatan = $this->peringatanRepository->find($id);

        if (empty($peringatan)) {
            Flash::error('Peringatan not found');

            return redirect(route('peringatans.index'));
        }

        return view('peringatans.show')->with('peringatan', $peringatan);
    }

    /**
     * Show the form for editing the specified Peringatan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $peringatan = $this->peringatanRepository->find($id);

        if (empty($peringatan)) {
            Flash::error('Peringatan not found');

            return redirect(route('peringatans.index'));
        }

        return view('peringatans.edit')->with('peringatan', $peringatan);
    }

    /**
     * Update the specified Peringatan in storage.
     *
     * @param  int              $id
     * @param UpdatePeringatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeringatanRequest $request)
    {
        $peringatan = $this->peringatanRepository->find($id);

        if (empty($peringatan)) {
            Flash::error('Peringatan not found');

            return redirect(route('peringatans.index'));
        }

        $peringatan = $this->peringatanRepository->update($request->all(), $id);

        Flash::success('Peringatan updated successfully.');

        return redirect(route('peringatans.index'));
    }

    /**
     * Remove the specified Peringatan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $peringatan = $this->peringatanRepository->find($id);

        if (empty($peringatan)) {
            Flash::error('Peringatan not found');

            return redirect(route('peringatans.index'));
        }

        $this->peringatanRepository->delete($id);

        Flash::success('Peringatan deleted successfully.');

        return redirect(route('peringatans.index'));
    }
}
