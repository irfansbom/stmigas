@extends('layout.main')

@section('content')
<div class="container">
    <br>
    <h4 class="text-center">SURVEI TAHUNAN PERUSAHAAN PERTAMBANGAN MIGAS
        <br> ANNUAL SURVEY OF OIL AND GAS MINING COMPANY
        <br> TAHUN 2022
    </h4>
    <form>
        <fieldset>
            <div class="mb-3 row">
                <label for="kip" class="col-sm-1 col-form-label">KIP</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="kip">
                </div>
            </div>
            <table class="table table-bordered border-dark">
                <tr>
                    <th>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">KIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kip">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">KIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kip">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">KIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kip">
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">KIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kip">
                            </div>
                        </div>
                    </th>
                </tr>

            </table>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                    <option>Disabled select</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>

</div>

@endsection
