<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <style>
        /* Custom header style */
        .custom-header {
            background-color: pink;
            color: black;
            text-align: center;
            padding: 1rem;
        }

        /* Custom button style */
        .custom-button {
            background-color: pink;
            border-color: pink;
            color: black;
        }

        /* Custom table style */
        .custom-table {
            background-color: pink;
            color: black;
        }

        /* Custom table header style */
        .custom-table thead {
            background-color: black;
            color: pink;
        }

        /* Custom icon color */
        .custom-icon {
            color: black;
        }

        /* Custom delete button style */
        .custom-delete-button {
            background-color: black;
            border-color: black;
            color: pink;
        }

        /* Custom edit button style */
        .custom-edit-button {
            background-color: black;
            border-color: black;
            color: pink;
        }
    </style>
</head>

<body>
    <header class="custom-header">
        <!-- Your header content here -->
        <h1>Student Management</h1>
    </header>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Add Student</h2>
                <form action="/save" method="post">
                    <div class="form-group">
                        <label for="StudName">Student Name:</label>
                        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                        <input type="text" class="form-control" name="StudName" placeholder="Enter Student Name"
                            value="<?= isset($pro['StudName']) ? $pro['StudName'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="StudGender">Gender:</label>
                        <input type="text" class="form-control" name="StudGender" placeholder="Enter Gender"
                            value="<?= isset($pro['StudGender']) ? $pro['StudGender'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="StudCourse">Student Course:</label>
                        <select class="form-control" id="StudCourse" name="StudCourse">
                            <option value="BSIT" <?= (isset($pro['StudCourse']) && $pro['StudCourse'] === 'BSIT') ? 'selected' : '' ?>>BSIT</option>
                            <option value="BSED" <?= (isset($pro['StudCourse']) && $pro['StudCourse'] === 'BSED') ? 'selected' : '' ?>>BSED</option>
                            <option value="BSHM" <?= (isset($pro['StudCourse']) && $pro['StudCourse'] === 'BSHM') ? 'selected' : '' ?>>BSHM</option>
                            <option value="BSTM" <?= (isset($pro['StudCourse']) && $pro['StudCourse'] === 'BSTM') ? 'selected' : '' ?>>BSTM</option>
                            <option value="BSN" <?= (isset($pro['StudCourse']) && $pro['StudCourse'] === 'BSN') ? 'selected' : '' ?>>BSN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="StudSection">Student Section:</label>
                        <select class="form-control" id="StudSection" name="StudSection">
                            <option value="F1" <?= (isset($pro['StudSection']) && $pro['StudSection'] === 'F1') ? 'selected' : '' ?>>A1</option>
                            <option value="F2" <?= (isset($pro['StudSection']) && $pro['StudSection'] === 'F2') ? 'selected' : '' ?>>A2</option>
                            <option value="F3" <?= (isset($pro['StudSection']) && $pro['StudSection'] === 'F3') ? 'selected' : '' ?>>A3</option>
                            <option value="F4" <?= (isset($pro['StudSection']) && $pro['StudSection'] === 'F4') ? 'selected' : '' ?>>A4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="StudYear">Student Year:</label>
                        <select class="form-control" id="StudYear" name="StudYear">
                            <option value="1st year" <?= (isset($pro['StudYear']) && $pro['StudYear'] === '1st year') ? 'selected' : '' ?>>First year</option>
                            <option value="2nd year" <?= (isset($pro['StudYear']) && $pro['StudYear'] === '2nd year') ? 'selected' : '' ?>>Second year</option>
                            <option value="3rd year" <?= (isset($pro['StudYear']) && $pro['StudYear'] === '3rd year') ? 'selected' : '' ?>>Third year</option>
                            <option value="4th year" <?= (isset($pro['StudYear']) && $pro['StudYear'] === '4th year') ? 'selected' : '' ?>>Fourth year</option>
                        </select>
                    </div>

                    <button type="submit" class="btn custom-button">Save</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Student Listing</h2>
                <ul>
                    <?php foreach ($product as $pr): ?>
                        <li>
                            <strong>Student Name:</strong> <?= $pr['StudName'] ?><br>
                            <strong>Gender:</strong> <?= $pr['StudGender'] ?><br>
                            <strong>Course:</strong> <?= $pr['StudCourse'] ?><br>
                            <strong>Section:</strong> <?= $pr['StudSection'] ?><br>
                            <strong>Year:</strong> <?= $pr['StudYear'] ?><br>
                            <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm custom-delete-button">
                                <i class="fas fa-trash custom-icon"></i> Delete
                            </a>
                            <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm custom-edit-button">
                                <i class="fas fa-edit custom-icon"></i> Edit
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- JavaScript and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
