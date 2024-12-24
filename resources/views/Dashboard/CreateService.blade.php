@extends ('layouts.dashboard')

@section('content')
<style>
    .service{
        width: 100%;
        height: 90%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<div class="service">
        <div class="col-sm-12 col-xl-6 w-52 h-52" >
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add service</h6>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name" >

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">description</label>
                        <input type="text" class="form-control" id="exampleInputDescription">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Add service</button>
                </form>
            </div>
        </div>
</div>

@endsection
