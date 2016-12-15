<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		$this->load->model('model_supplier');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
	public function index() {
		$this->profile();
	}

	public function profile($page = 'supplier') {
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function negotiation($page = 'negotiation') {
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function upload() {

	}

	public function supplier_search() {
		if (isset($_POST['id'])) {
			$id = $_POST['id'];
			$query = "SELECT * FROM supplier WHERE id_supplier=$id";
			$dataResult = $this->db->query($query);
			$arr1 = array();
			$i = 0;
			$str = "";
			foreach ($dataResult->result_array() as $key) {
				//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
				$str = $str . $key['local_name'] . "/" . $key['english_name'] . '::
                    <div class="col-md-12" id="basic-panels"> <!-- top panels -->

                        <section class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#basic-panels"><h3><i class="fa fa-book"> </i> Basic Data</h3></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6"> <!-- top left panel -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Supplier Type</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="supp-type" style="width: initial;">';
				if ($key['supplier_type'] == "C") {
					$str = $str . '
                                                    <option value="C">C - Commercial</option>
                                                    <option value="I">I - Internal</option>
                                                    <option value="E">E - Expense</option>';
				} elseif ($key['supplier_type'] == "I") {
					$str = $str . '
                                                	<option value="I">I - Internal</option>
                                                    <option value="C">C - Commercial</option>
                                                    <option value="E">E - Expense</option>';
				} elseif ($key['supplier_type'] == "E") {
					$str = $str . '
                                                	<option value="E">E - Expense</option>
                                                	<option value="I">I - Internal</option>
                                                    <option value="C">C - Commercial</option>';
				}

				$str = $str . '
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">NPWP</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control input-md" data-mask="99.999.999.9-999.999" name="npwp" placeholder="' . $key['npwp'] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Specific Supplier</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="supp-spec" style="width: initial;">';
				if ($key['specific_supplier'] == 1) {
					$str = $str . '
                                                	<option value="1">Direct</option>
                                                    <option value="2">Wholesale</option>
                                                    <option value="3">Import</option>';
				} elseif ($key['specific_supplier'] == 2) {
					$str = $str . '
                                                	<option value="2">Wholesale</option>
                                                	<option value="1">Direct</option>
                                                    <option value="3">Import</option>';
				} elseif ($key['specific_supplier'] == 3) {
					$str = $str . '
                                                	<option value="3">Import</option>
                                                	<option value="2">Wholesale</option>
                                                	<option value="1">Direct</option>';
				}

				$str = $str . '</select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Remit Supplier Code</label>
                                            <div class="col-md-2">
                                                <input type="text" maxlength="4" class="form-control input-md" name="remit" placeholder="' . $key['remit_supplier_code'] . '">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">English Name</label>
                                            <div class="col-md-7">
                                                <input type="text" maxlength="35" class="form-control input-md" name="en-name" placeholder="' . $key['english_name'] . '">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Local Name</label>
                                            <div class="col-md-7">
                                                <input type="text" maxlength="35" class="form-control input-md" name="loc-name" placeholder="' . $key['local_name'] . '">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Prefix of Name</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="prfx-name" style="width: initial;">';
				if ($key['prefix_of_name'] == '000') {
					$str = $str . '
                                                	<option value="000">000</option>
                                                    <option value="001">001</option>
                                                    <option value="002">002</option>';
				} elseif ($key['prefix_of_name'] == '001') {
					$str = $str . '
                                                	<option value="001">001</option>
                                                	<option value="000">000</option>
                                                    <option value="002">002</option>';
				} elseif ($key['prefix_of_name'] == '002') {
					$str = $str . '
                                                	<option value="002">002</option>
                                                	<option value="000">000</option>
                                                    <option value="001">001</option>';
				}

				$str = $str . '</select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Activity Location</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control input-md" name="act-loc" maxlength="35" placeholder="' . $key['activity_location'] . '">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6"> <!-- top right panel -->

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Address</label>
                                            <div class="col-md-5">
                                                <textarea class="form-control" rows="2" name="alamat-detil" maxlength="255">' . $key['alamat_detil'] . '</textarea>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" maxlength="5" class="form-control input-md" name="kodepos" placeholder="66212">
                                                <span class="help-block">Kodepos</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="provinsi">
                                                    <option value="11">DKI Jakarta</option>
                                                    <option value="12">Banten</option>
                                                    <option value="13">Jawa Barat</option>
                                                </select>
                                                <span class="help-block">Provinsi</span>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="kota">
                                                    <option value="1112">Bandung</option>
                                                    <option value="1113">Serang</option>
                                                    <option value="1114">Cirebon</option>
                                                </select>
                                                <span class="help-block">Kota</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="kecamatan">
                                                    <option value="111211">Manggarai</option>
                                                    <option value="111212">Jatinegara</option>
                                                    <option value="111213">Senen</option>
                                                </select>
                                                <span class="help-block">Kecamatan</span>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="kelurahan">
                                                    <option value="1112120001">Kebon Sayur</option>
                                                    <option value="1112120002">Bidaracina</option>
                                                    <option value="1112120003">Senayan</option>
                                                </select>
                                                <span class="help-block">Kelurahan</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Contact</label>
                                            <div class="col-md-4">
                                                <input type="number" class="form-control input-md" name="phone" max="99999999999999999999" placeholder="' . $key['no_telp'] . '">
                                                <span class="help-block">Telephone</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" class="form-control input-md" name="fax" max="99999999999999999999" placeholder="' . $key['fax'] . '">
                                                <span class="help-block">Fax</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control input-md" name="email" maxlength="100" placeholder="' . $key['email'] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">CP</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control input-md" name="cp" maxlength="100" placeholder="' . $key['CP_name'] . '">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6" id="payment-panels"> <!-- mid left panels -->
                        <section class="panel">
                            <div class="panel-body">
                                <a href="#payment-panels"><h3><i class="fa fa-credit-card"> </i> Payment Data</h3></a>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Payment Days</label>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control input-md" name="pay-day" size="2" max="99" placeholder="' . $key['payment_days'] . '">
                                                <span class="help-block">Payment Days</span>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control input-md" name="scc-pay-day" value="55" size="3" max="999" placeholder="' . $key['scc_payment_days'] . '">
                                                <span class="help-block">SCC Payment Days</span>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" name="end-month">';
				if ($key['payment_end_of_month'] == 0) {
					$str = $str . '
                                                	<option value="0">NO</option>
                                                    <option value="1">YES</option>';
				} elseif ($key['payment_end_of_month'] == 1) {
					$str = $str . '
                                                	<option value="1">YES</option>
                                                	<option value="0">NO</option>';
				}

				$str = $str . '</select>
                                                <span class="help-block">End of Month</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Penalty</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-md" name="service-penalty" size="100" placeholder="' . $key['service_level_penalty'] . '">
                                                <span class="help-block">Service Level</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-md" name="delivery-penalty" size="100" placeholder="' . $key['late_delivery_penalty'] . '">
                                                <span class="help-block">Late Delivery</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Payment Mode</label>
                                            <div class="col-md-3">
                                                <select class="form-control" name="pay-mode" style="width: initial;">';
				if ($key['payment_mode'] == '1') {
					$str = $str . '
                                                	<option value="1">Cheque</option>
                                                    <option value="2">Bank Transfer</option>
                                                    <option value="3">Cash</option>';
				} elseif ($key['payment_mode'] == '2') {
					$str = $str . '
                                                	<option value="2">Bank Transfer</option>
                                                	<option value="1">Cheque</option>
                                                    <option value="3">Cash</option>';
				} elseif ($key['payment_mode'] == '3') {
					$str = $str . '
                                                	<option value="3">Cash</option>
                                                	<option value="1">Cheque</option>
                                                    <option value="2">Bank Transfer</option>';
				}

				$str = $str . '
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-md" name="bank-name" size="100" placeholder="' . $key['bank_code'] . '">
                                                <span class="help-block">Bank Name</span>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="number" class="form-control input-md" name="acc-num" size="14" max="99999999999999" placeholder="' . $key['account_no'] . '">
                                                <span class="help-block">Account Number</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cheque</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-md" name="cheque-title" size="100" placeholder="' . $key['cheque_title'] . '">
                                                <span class="help-block">Title</span>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control input-md" name="cheque-mailing" size="100" placeholder="' . $key['cheque_mail_address'] . '">
                                                <span class="help-block">Mailing Address</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-6" id="order-panels"> <!-- mid right panels -->

                        <section class="panel">
                            <div class="panel-body">
                                <a href="#order-panels"><h3><i class="fa fa-truck"> </i> Order & Delivery Schedule</h3></a>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cut off Time</label>
                                            <div class="col-md-4">
                                                <input type="time" class="form-control input-md" name="cut-off-time" placeholder="' . $key['cut_off_time'] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Order Day</label>
                                            <div class="col-md-2">';
				$isSun = "unchecked";
				$isMon = "unchecked";
				$isTue = "unchecked";
				$isWed = "unchecked";
				$isThu = "unchecked";
				$isFri = "unchecked";
				$isSat = "unchecked";
				$orderDay = str_split($key['order_day']);
				for ($k = 0; $k < count($orderDay); $k++) {
					if ($orderDay[$k] == '1') {$isSun = "checked";} elseif ($orderDay[$k] == '2') {$isMon = "checked";} elseif ($orderDay[$k] == '3') {$isTue = "checked";} elseif ($orderDay[$k] == '4') {$isWed = "checked";} elseif ($orderDay[$k] == '5') {$isThu = "checked";} elseif ($orderDay[$k] == '6') {$isFri = "checked";} elseif ($orderDay[$k] == '7') {$isSat = "checked";}
				}
				$str = $str . '
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-order[]" type="checkbox" value="sun" ' . $isSun . '> Sun
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-order[]" type="checkbox" value="mon" ' . $isMon . '> Mon
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-order[]" type="checkbox" value="tue" ' . $isTue . '> Tue
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-order[]" type="checkbox" value="wed" ' . $isWed . '> Wed
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-order[]" type="checkbox" value="thu" ' . $isThu . '> Thu
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-order[]" type="checkbox" value="fri" ' . $isFri . '> Fri
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-order[]" type="checkbox" value="sat" ' . $isSat . '> Sat
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Delivery Day</label>
                                            <div class="col-md-2">';
				$isSun = "unchecked";
				$isMon = "unchecked";
				$isTue = "unchecked";
				$isWed = "unchecked";
				$isThu = "unchecked";
				$isFri = "unchecked";
				$isSat = "unchecked";
				$orderDay = str_split($key['delivery_day']);
				for ($k = 0; $k < count($orderDay); $k++) {
					if ($orderDay[$k] == '1') {$isSun = "checked";} elseif ($orderDay[$k] == '2') {$isMon = "checked";} elseif ($orderDay[$k] == '3') {$isTue = "checked";} elseif ($orderDay[$k] == '4') {$isWed = "checked";} elseif ($orderDay[$k] == '5') {$isThu = "checked";} elseif ($orderDay[$k] == '6') {$isFri = "checked";} elseif ($orderDay[$k] == '7') {$isSat = "checked";}
				}
				$str = $str . '
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-deliver[]" type="checkbox" value="sun" ' . $isSun . '> Sun
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-deliver[]" type="checkbox" value="mon" ' . $isMon . '> Mon
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-deliver[]" type="checkbox" value="tue" ' . $isTue . '> Tue
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-deliver[]" type="checkbox" value="wed" ' . $isWed . '> Wed
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-deliver[]" type="checkbox" value="thu" ' . $isThu . '> Thu
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-deliver[]" type="checkbox" value="fri" ' . $isFri . '> Fri
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="day-deliver[]" type="checkbox" value="sat" ' . $isSat . '> Sat
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cut off Time</label>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control input-md" name="order-period" size="1" min="1" max="7" placeholder="5">
                                            </div>
                                            <span class="help-block">times a week</span>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Supplier EAN</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control input-md" name="supplier-ean" maxlength="13" placeholder="' . $key['supplier_ean'] . '">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-12" id="stop-panels"> <!-- lower panels -->

                        <section class="panel">
                            <div class="panel-body">
                                <a href="#stop-panels"><h3><i class="fa fa-power-off"> </i> Stop Payment / Business Data</h3></a>
                                <hr>
                                <div class="row">

                                    <div class="col-md-4"> <!-- low left panel -->

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Dept Concern</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control input-md" name="dept-concern" maxlength="20" placeholder="' . $key['stop_dept_concern'] . '">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Stop Payment</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="stop-pay" style="width: initial;">';
				if ($key['stop_payment'] == '0') {
					$str = $str . '
                                                	<option value="0">NO</option>
                                                    <option value="1">YES</option>';
				} elseif ($key['stop_payment'] == '1') {
					$str = $str . '
                                                	<option value="1">YES</option>
                                                	<option value="0">NO</option>';
				}

				$str = $str . '</select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Stop Payment Reason</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="stop-pay-reason1" style="width: initial;">';
				if ($key['stop_payment_reason_1'] == '') {
					$str = $str . '
                                                	<option value="">-</option>
                                                    <option value="2">Stop Business</option>
                                                    <option value="3">Pending A/R</option>
                                                    <option value="4">Seasonal Supplier</option>
                                                    <option value="5">Temporary Stopped</option>
                                                    <option value="6">Bankrupted</option>
                                                    <option value="7">Change Data</option>';
				} elseif ($key['stop_payment_reason_1'] == '2') {
					$str = $str . '
                                                	<option value="2">Stop Business</option>
                                                	 <option value="">-</option>
                                                    <option value="3">Pending A/R</option>
                                                    <option value="4">Seasonal Supplier</option>
                                                    <option value="5">Temporary Stopped</option>
                                                    <option value="6">Bankrupted</option>
                                                    <option value="7">Change Data</option>';
				} elseif ($key['stop_payment_reason_1'] == '3') {
					$str = $str . '
                                                	<option value="3">Pending A/R</option>
                                                	<option value="2">Stop Business</option>
                                                	 <option value="">-</option>
                                                    <option value="4">Seasonal Supplier</option>
                                                    <option value="5">Temporary Stopped</option>
                                                    <option value="6">Bankrupted</option>
                                                    <option value="7">Change Data</option>';
				} elseif ($key['stop_payment_reason_1'] == '4') {
					$str = $str . '
                                                	<option value="4">Seasonal Supplier</option>
                                                	<option value="3">Pending A/R</option>
                                                	<option value="2">Stop Business</option>
                                                	 <option value="">-</option>
                                                    <option value="5">Temporary Stopped</option>
                                                    <option value="6">Bankrupted</option>
                                                    <option value="7">Change Data</option>';
				} elseif ($key['stop_payment_reason_1'] == '5') {
					$str = $str . '
                                                	<option value="5">Temporary Stopped</option>
                                                	<option value="4">Seasonal Supplier</option>
                                                	<option value="3">Pending A/R</option>
                                                	<option value="2">Stop Business</option>
                                                	 <option value="">-</option>
                                                    <option value="6">Bankrupted</option>
                                                    <option value="7">Change Data</option>';
				} elseif ($key['stop_payment_reason_1'] == '6') {
					$str = $str . '
                                                	 <option value="6">Bankrupted</option>
                                                	<option value="5">Temporary Stopped</option>
                                                	<option value="4">Seasonal Supplier</option>
                                                	<option value="3">Pending A/R</option>
                                                	<option value="2">Stop Business</option>
                                                	 <option value="">-</option>
                                                    <option value="7">Change Data</option>';
				} elseif ($key['stop_payment_reason_1'] == '7') {
					$str = $str . '
                                                	<option value="7">Change Data</option>
                                                	 <option value="6">Bankrupted</option>
                                                	<option value="5">Temporary Stopped</option>
                                                	<option value="4">Seasonal Supplier</option>
                                                	<option value="3">Pending A/R</option>
                                                	<option value="2">Stop Business</option>
                                                	 <option value="">-</option>';
				}

				$str = $str . '
                                                </select>
                                                <span class="help-block">Level 1</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4"> <!-- low mid panel -->

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Stop Payment Reason</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="stop-pay-reason2" style="width: initial;">';
				if ($key['stop_payment_reason_2'] == '') {
					$str = $str . '
                                                	<option value="">-</option>
                                                    <option value="3">Pending A/R</option>
                                                    <option value="4">Seasonal Supplier</option>
                                                    <option value="5">Temporary Stopped</option>';
				} elseif ($key['stop_payment_reason_2'] == '3') {
					$str = $str . '
                                                	<option value="3">Pending A/R</option>
                                                	<option value="">-</option>

                                                    <option value="4">Seasonal Supplier</option>
                                                    <option value="5">Temporary Stopped</option>';
				} elseif ($key['stop_payment_reason_2'] == '4') {
					$str = $str . '
                                                	<option value="4">Seasonal Supplier</option>
                                                	<option value="">-</option>
                                                    <option value="3">Pending A/R</option>

                                                    <option value="5">Temporary Stopped</option>';
				} elseif ($key['stop_payment_reason_2'] == '5') {
					$str = $str . '
                                                	<option value="5">Temporary Stopped</option>
                                                	<option value="">-</option>
                                                    <option value="3">Pending A/R</option>
                                                    <option value="4">Seasonal Supplier</option>';
				}

				$str = $str . '</select>
                                                <span class="help-block">Level 2</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Stop Business</label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="stop-bus-all" style="width: initial;">';
				if ($key['stop_business_all_concern_dept'] == '0') {
					$str = $str . '
                                                	<option value="0">NO</option>
                                                    <option value="1">YES</option>';
				} elseif ($key['stop_business_all_concern_dept'] == '1') {
					$str = $str . '
                                                	<option value="1">YES</option>
                                                	<option value="0">NO</option>';
				}

				$str = $str . '
                                                </select>
                                                <span class="help-block"> Level 1 - Concerning all depts.</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Stop Business</label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="stop-bus-spec" style="width: initial;">';
				if ($key['stop_business_specific_concern_dept'] == '0') {
					$str = $str . '
                                                	<option value="0">NO</option>
                                                    <option value="1">YES</option>';
				} elseif ($key['stop_business_specific_concern_dept'] == '1') {
					$str = $str . '
                                                	<option value="1">YES</option>
                                                	<option value="0">NO</option>';
				}

				$str = $str . '
                                                </select>
                                                <span class="help-block"> Level 1 - Specific dept.</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4"> <!-- low right panel -->

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Stop Business Reason</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="stop-pay-reason2" style="width: initial;">';
				if ($key['stop_business_reason'] == '') {
					$str = $str . '
                                                	<option value="">-</option>
                                                    <option value="0">CROM Decision</option>
                                                    <option value="1">Supplier Decision</option>
                                                    <option value="2">Supplier Bankrupt</option>';
				} elseif ($key['stop_business_reason'] == '0') {
					$str = $str . '
                                                	<option value="0">CROM Decision</option>
                                                	<option value="">-</option>
                                                    <option value="1">Supplier Decision</option>
                                                    <option value="2">Supplier Bankrupt</option>';
				} elseif ($key['stop_business_reason'] == '1') {
					$str = $str . '
                                                	<option value="1">Supplier Decision</option>
                                                	<option value="0">CROM Decision</option>
                                                	<option value="">-</option>
                                                    <option value="2">Supplier Bankrupt</option>';
				} elseif ($key['stop_business_reason'] == '2') {
					$str = $str . '
                                                	<option value="2">Supplier Bankrupt</option>
                                                	<option value="1">Supplier Decision</option>
                                                	<option value="0">CROM Decision</option>
                                                	<option value="">-</option>';
				}

				$str = $str . '
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Start Stop</label>
                                            <div class="col-md-6">
                                                <input type="text" placeholder ="dd-mm-yyyy" size="16" maxlength="0" class="form-control" name="start-stop">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">End Stop</label>
                                            <div class="col-md-6">
                                                <input type="text" placeholder ="dd-mm-yyyy" size="16" maxlength="0" class="form-control" name="end-stop">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>

            	';

				//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

				$i++;

			}
			echo $str;
		} elseif (isset($_POST['name'])) {
			$nama = $_POST['name'];
			$query = "SELECT english_name,local_name,id_supplier FROM supplier WHERE (local_name LIKE '%$nama%') OR (english_name LIKE '%$nama%') ";
			$dataResult = $this->db->query($query);
			$arr1 = array();
			$i = 0;
			$str = "";
			foreach ($dataResult->result_array() as $key) {

				$str = $str . '
					<option>' . $key['local_name'] . "/" . $key['english_name'] . " : " . $key['id_supplier'] . '</option>
				';

				$i++;
				if ($i == 10) {break;}
			}
			echo $str;
		}
	}

	public function upload_batch() {
		$fileOp = explode("_", $_FILES["file"]["name"]);
		$target_dir = "data/excel_supplier/";
		$target_file = $target_dir . basename($fileOp[1]);
		$uploadOk = 1;
		if (file_exists($target_file)) {
			echo "nama file telah ada";
			$uploadOk = 0;
		}

		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		if ($_FILES["file"]["size"] > 500000) {
			echo "maaf ukuran file terlalu besar";
			$uploadOk = 0;
		}
		// format file yg dimungkinkan
		if ($imageFileType != "xls") {
			echo "maaf hanya xls yang dimungkinkan";
			$uploadOk = 0;
		}
		// error file
		if ($uploadOk == 0) {
			echo "gagal upload file";

			// file siap diupload jika semua ok
		} else {

			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				$data["namaFile"] = $target_file . "";
				$data["sizeRow"] = (int) $fileOp[0];
				$data["kode"] = "uploadNegotiation";
				$page = "data/Classes/upload/dataItem1";
				$this->load->view($page, $data);
			} else {
				echo "gagal upload file";
			}
		}

	}

	public function upload_single_negotiation() {
		//$this->cekNull($_POST['kodePos']).",".
		//.$this->cekNull($_POST['provinsi']).",".$this->cekNull($_POST['kota']).",".$this->cekNull($_POST['kecamatan']).","
		//gps_lat,gps_lng,
		echo "ok";
		$query = "INSERT INTO supplier(supplier_type,npwp,specific_supplier,remit_supplier_code,english_name,local_name,prefix_of_name,activity_location,alamat_detil,alamat_kel,no_telp,fax,email,CP_name,payment_days,scc_payment_days,payment_end_of_month,service_level_penalty,late_delivery_penalty,payment_mode,bank_code,account_no,cheque_title,cheque_mail_address,cut_off_time,order_day,delivery_day,order_period,supplier_ean,stop_dept_concern,stop_payment,stop_payment_reason_1,stop_payment_reason_2,stop_business_all_concern_dept,stop_business_specific_concern_dept,stop_business_reason,stop_start_date,stop_end_date,id_supplier) value (" . $this->cekNull($_POST['selSuppType']) . "," . $this->cekNull($_POST['npwp']) . "," . $this->cekNull($_POST['selSuppSpec']) . "," . $this->cekNull($_POST['remit']) . "," . $this->cekNull($_POST['enName']) . "," . $this->cekNull($_POST['locName']) . "," . $this->cekNull($_POST['prfxName']) . "," . $this->cekNull($_POST['actLoc']) . "," . $this->cekNull($_POST['alamatDetil']) . "," . $this->cekNull($_POST['kelurahan']) . "," . $this->cekNull($_POST['phone']) . "," . $this->cekNull($_POST['fax']) . "," . $this->cekNull($_POST['email']) . "," . $this->cekNull($_POST['cp']) . "," . $this->cekNull($_POST['payDay']) . "," . $this->cekNull($_POST['sccPayDay']) . "," . $this->cekNull($_POST['endMonth']) . "," . $this->cekNull($_POST['servicePenalty']) . "," . $this->cekNull($_POST['deliveryPenalty']) . "," . $this->cekNull($_POST['payMode']) . "," . $this->cekNull($_POST['bankName']) . "," . $this->cekNull($_POST['accNum']) . "," . $this->cekNull($_POST['chequeTitle']) . "," . $this->cekNull($_POST['chequeMailing']) . "," . $this->cekNull($_POST['cutOffTime']) . "," . $this->cekNull($_POST['orderDay']) . "," . $this->cekNull($_POST['deliveryDay']) . "," . $this->cekNull($_POST['orderPeriod']) . "," . $this->cekNull($_POST['supplierEan']) . "," . $this->cekNull($_POST['deptConcern']) . "," . $this->cekNull($_POST['stopPay']) . "," . $this->cekNull($_POST['stopPayReason1']) . "," . $this->cekNull($_POST['stopPayReason2']) . "," . $this->cekNull($_POST['stopBusAll']) . "," . $this->cekNull($_POST['stopBusSpec']) . "," . $this->cekNull($_POST['stopBusReason']) . "," . $this->cekNull($_POST['startStop']) . "," . $this->cekNull($_POST['endStop']) . "," . $this->cekNull($_POST['idSupplier']) . ")";

		$this->db->query($query);
		echo "data berhasil diupload";
	}

	public function approveSupplier() {
		$ids = $_POST['id'];
		$idAdmin = $this->model_supplier->getKategoriPegawai($this->session->userdata('nip'));
		$timeS = new DateTime();
		$waktu = $timeS->format('Y-m-d H:i:s');
		if ($idAdmin == "5") {
			$dataWaktu = array(
				'financialManager' => $waktu,
			);
			$this->model_supplier->approve($dataWaktu, $ids);
		} elseif ($idAdmin == "6") {
			$dataWaktu = array(
				'supplyChainManager' => $waktu,
			);
			$this->model_supplier->approve($dataWaktu, $ids);
		} elseif ($idAdmin == "7") {
			$dataWaktu = array(
				'logisticManager' => $waktu,
			);
			$this->model_supplier->approve($dataWaktu, $ids);
		}

	}

	public function cekNull($data) {
		if ($data == "") {
			$data = "NULL";
			return $data;
		}
		return "'" . $data . "'";
	}

	public function nego_approve($page = 'nego_approve') {
		$data['namaFile'] = $page;
		$data['suplierUnapprove'] = $this->model_supplier->getSuppUnapprove();
		$supplier = $this->model_supplier->getSupp();
		$dataStatus = array(
			'status' => '1',
		);
		foreach ($supplier as $s) {
			if ($s->financialManager != NULL && $s->supplyChainManager != NULL && $s->logisticManager != NULL) {
				$this->model_supplier->updateStatus($dataStatus, $s->id_supplier);
			}
		}
		$this->load->view($page, $data);
	}

}