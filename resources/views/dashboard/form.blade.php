@include("dashboard/navigation")

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Basic Table</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Default Forms</h4>
                    <h5 class="card-subtitle"> All bootstrap element classies </h5>
                    <form class="form-horizontal mt-4">
                        <div class="form-group">
                            <label>Default Text <span class="help"> e.g. "Text"</span></label>
                            <input type="text" class="form-control" value="Text...">
                        </div>
                        <div class="form-group">
                            <label for="example-email">Email <span class="help"> e.g.
                                            "example@gmail.com"</span></label>
                            <input type="email" id="example-email" name="example-email" class="form-control"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="password">
                        </div>
                        <div class="form-group">
                            <label>Placeholder</label>
                            <input type="text" class="form-control" placeholder="placeholder">
                        </div>
                        <div class="form-group">
                            <label>Text area</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Input Select</label>
                            <select class="form-select shadow-none col-12" id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Default file upload</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@include("dashboard/footer")
