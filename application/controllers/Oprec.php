<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oprec extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("TestimoniModel");
		$this->load->model("AlumniModel");
		$this->load->model("ProgramStudiModel");
		$this->load->model("DosenModel");
	}
	public function index()
	{
		$this->load->view('oprec');
	}
	public function getHome()
	{
		$this->load->view('home');
	}

	public function getTestimoniPage()
	{
		$this->load->view('testimoni');
	}
	public function getListTestimoni()
	{
		$listTestimoni = $this->TestimoniModel->getListTestimoni();
		echo json_encode($listTestimoni);
		//echo "ini hasil dari getListTestimoni";
	}

	public function getAlumniPage()
	{
		$this->load->view('alumni');
	}
	public function getListAlumni()
	{
		$listAlumni = $this->AlumniModel->getListAlumni();
		echo json_encode($listAlumni);
		//echo "ini hasil dari getListTestimoni";
	}

	public function getListProgramStudi()
	{
		$listProgramStudi = $this->ProgramStudiModel->getListProgramStudi();
		echo json_encode($listProgramStudi);
		//echo "ini hasil dari getListTestimoni";
	}

	public function addNewAlumni()
	{
		$alumni = $_POST;

		$statusSimpan = $this->AlumniModel->insertNewAlumni($alumni);

		if ($statusSimpan == 1) {
			$alumni = $this->AlumniModel->getAlumniByNIM($alumni['nim']);
			$nbdata = $this->AlumniModel->getJumlahData();
		}

		$res = [
			'status' => $statusSimpan,
			'alumni' => $alumni,
			'nbdata' => $nbdata,
		];

		echo json_encode($res);
	}

	public function simpanData()
	{
		$alumni = $_POST;
		$nim_dummy = $alumni['nim_dummy']; //sementara tanpa mengggunakan session

		if ($nim_dummy == '') {
			$statusSimpan = $this->AlumniModel->insertNewAlumni($alumni);
			if ($statusSimpan == 1) {
				$alumni = $this->AlumniModel->getAlumniByNIM($alumni['nim']);
			}
		} else { //$nim => ada
			$statusSimpan = $this->AlumniModel->updateAlumni($nim_dummy, $alumni);
			if ($statusSimpan == 1) {
				$alumni = $this->AlumniModel->getAlumniByNIM($nim_dummy);
			}
		}

		$nbdata = $this->AlumniModel->getJumlahData();

		$res = [
			'status' => $statusSimpan,
			'alumni' => $alumni,
			'nbdata' => $nbdata,
		];

		echo json_encode($res);
	}

	public function hapusAlumni()
	{
		$nim = $_POST['nim'];

		$statusHapus = $this->AlumniModel->hapusAlumni($nim);

		echo json_encode($statusHapus);
	}

	public function getAlumniByNIM($nim)
	{
		$alumni = $this->AlumniModel->getAlumniByNIM($nim);

		echo json_encode($alumni);
	}

	//dosen
	public function getDosenPage()
	{
		$this->load->view('dosen');
	}
	public function getListDosen()
	{
		$listDosen = $this->DosenModel->getListDosen();
		echo json_encode($listDosen);
	}
	public function addNewDosen()
	{
		$dosen = $_POST;

		$statusSimpan = $this->DosenModel->insertNewDosen($dosen);

		if ($statusSimpan == 1) {
			$dosen = $this->DosenModel->getDosenByNIDN($dosen['nidn']);
			$nbdata = $this->DosenModel->getJumlahDataDosen();
		}

		$res = [
			'status' => $statusSimpan,
			'dosen' => $dosen,
			'nbdata' => $nbdata,
		];

		echo json_encode($res); //agar data tidak di serang
	}

	public function simpanDataDosen()
	{
		$dosen = $_POST;
		$nidn_dummy = $dosen['nidn_dummy']; //sementara tanpa mengggunakan session

		if ($nidn_dummy == '') {
			$statusSimpan = $this->DosenModel->insertNewDosen($dosen);
			if ($statusSimpan == 1) {
				$dosen = $this->DosenModel->getDosenByNIDN($dosen['nidn']);
			}
		} else { //$nim => ada
			$statusSimpan = $this->DosenModel->updateDosen($nidn_dummy, $dosen);
			if ($statusSimpan == 1) {
				$dosen = $this->DosenModel->getDosenByNIDN($nidn_dummy);
			}
		}

		$nbdata = $this->DosenModel->getJumlahDataDosen();

		$res = [
			'status' => $statusSimpan,
			'dosen' => $dosen,
			'nbdata' => $nbdata,
		];

		echo json_encode($res);
	}

	public function hapusDosen()
	{
		$nidn = $_POST['nidn'];

		$statusHapus = $this->DosenModel->hapusDosen($nidn);

		echo json_encode($statusHapus);
	}

	public function getDosenByNIDN($nidn)
	{
		$dosen = $this->DosenModel->getDosenByNIDN($nidn);

		echo json_encode($dosen);
	}
}
