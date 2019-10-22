<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Create Issues</title>
</head>
<body>
    <div class="container">
        <div class="content form-group row">
            <h3>Issue mới</h3>
            <p>Chọn mẫu issue</p>
            <div class="col-sm-3">
                <select class="form-control" name="issues_template" id="issuesTemplate">
                    <option value="" selected>None</option>
                    <option value="">Template 1</option>
                    <option value="">Template 2</option>
                    <option value="">Template 3</option>
                </select>
            </div>
        </div>
        <div class="template-generate-section">
        <form>
            <div class="form-group row">
                <label for="typeSelect" class="col-sm-2 col-form-label">
                    Loại
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="typeSelect">
                        <option value="">None</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Tiêu đề</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Miêu tả</label>
                <div class="col-sm-10">
                    <textarea id="description" class="form-control" rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="priorityLevel" class="col-sm-2 col-form-label">
                    Mức độ ưu tiên
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="priorityLevel">
                        <option value="">None</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="statusSelect" class="col-sm-2 col-form-label">
                    Trạng thái
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="statusSelect">
                        <option value="">None</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="assigneeSelect" class="col-sm-2 col-form-label">
                    Assignee
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="assigneeSelect">
                        <option value="">None</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="parentWorkSelect" class="col-sm-2 col-form-label">
                    Công việc cha
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="parentWorkSelect">
                        <option value="">None</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="startDate" class="col-sm-2 col-form-label">Ngày bắt đầu</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="startDate">
                </div>
            </div>
            <div class="form-group row">
                <label for="endDate" class="col-sm-2 col-form-label">Ngày kết thúc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="endDate">
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Thời gian thực hiện</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="parentWorkSelect" class="col-sm-2 col-form-label">
                    % Đã làm
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="parentWorkSelect">
                        <option value="">None</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="solution" class="col-sm-2 col-form-label">Hướng giải quyết</label>
                <div class="col-sm-10">
                    <textarea id="solution" class="form-control" rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="fileUpload" class="col-sm-2 col-form-label">Tập đính kèm</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="fileUpload">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">Tạo</button>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Tạo và tiếp tục</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>