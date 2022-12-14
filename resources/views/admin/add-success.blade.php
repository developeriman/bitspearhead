@extends('layouts.theme')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <h3 style="color:black;"> Add Success History </h3>
            <div>
                <a href="{{ route('indexSuccess') }}"><button class="btn btn-danger">Success History</button></a>
            </div>
        </div>
        <div class="card-body">
            <div class="example">
                <form action="{{ route('storeSuccess') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Succss card
                                title</label>
                            <input type="text" name="ss_title" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('ss_title'))
                                <span class="text-danger">{{ $errors->first('ss_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Adveritser Name</label>
                            <input type="text" name="adveritser_name" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('adveritser_name'))
                                <span class="text-danger">{{ $errors->first('adveritser_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Platform name
                                </label>
                            <input type="text" name="platform_name" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('platform_name'))
                                <span class="text-danger">{{ $errors->first('platform_name') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campagin Objective
                                </label>
                            <input type="text" name="campaign_objective" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_objective'))
                                <span class="text-danger">{{ $errors->first('campaign_objective') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campaign module
                                </label>
                            <input type="text" name="campaign_module" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_module'))
                                <span class="text-danger">{{ $errors->first('campaign_module') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Campaign duration
                                </label>
                            <input type="text" name="campaign_duration" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('campaign_duration'))
                                <span class="text-danger">{{ $errors->first('campaign_duration') }}</span>
                            @endif
                        </div>

                    </div>



                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Content image
                                </label>
                            <input type="file" name="content_image" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('content_image'))
                                <span class="text-danger">{{ $errors->first('content_image') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Content video
                                </label>
                            <input type="file" name="content_video" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('content_video'))
                                <span class="text-danger">{{ $errors->first('content_video') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="row pl-3">
                        <div class="mb-3 col-6">
                            <label for="exampleInputFarmer" class="form-label" style="color:black;">Ss card Image
                                </label>
                            <input type="file" name="ss_card" class="form-control" id="exampleInputFarmer"
                                aria-describedby="emailHelp" />
                            @if ($errors->has('ss_card'))
                                <span class="text-danger">{{ $errors->first('ss_card') }}</span>
                            @endif
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary ml-3 ml-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
