<h2>this is a test file</h2>

@if (isset($_POST['collection_var']))
                                        Collection Var = {{$_POST['collection_var']}}
                                    @else
                                        No Collection variable got '{{'var-'.$_POST['collection_var']}}' empty
                                    @endif
