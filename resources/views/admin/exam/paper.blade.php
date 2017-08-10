@extends('layout.admin')

@section('content')
    <div ng-controller="exam-detail.controller as ctrl">
        <div class="list-group" ng-repeat="x in ctrl.paper">
            <div class="list-group-item active">
            	<button type="button" class="close danger" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
	           	<h4 class="list-group-item-heading" >{$x.content$}</h4>    
                <p class="list-group-item-text">
                    <div class="radio">
                        <form>
        	              	<ul  ng-repeat="y in x.options track by $index">                          
                                <label for="">
                                    <input type="radio" name="checkOptions"><li>{$y.content$}</li>
                                </label>
        	                </ul>
                        </form>
                    </div>
                </p>   
            </div>
        </div>
    </div>
    <input id="paperId" value='{{ $id }}' hidden>
@endsection