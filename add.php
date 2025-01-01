<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create a New Task</title>
    
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="bg-primary text-white text-center py-3">
      <h1>Create a New Task</h1>
    </header>
    <main class="container mt-5">
      <div class="card shadow">
        <div class="card-body">
          <form action="addtask.php" method="POST">
            <div class="form-group">
              <label for="title">Task Title:</label>
              <input
                type="text"
                id="title"
                name="title"
                class="form-control"
                placeholder="Enter task title"
                required
              />
            </div>
            <div class="form-group">
              <label for="description">Task Description:</label>
              <textarea
                id="description"
                name="description"
                class="form-control"
                placeholder="Write a brief description (max 500 chars)"
                maxlength="500"
                rows="5"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <label for="status">Task Status:</label>
              <select id="status" name="status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
              </select>
            </div>
            <div class="form-actions text-center">
              <button type="submit" class="btn btn-success btn-lg">Add Task</button>
            </div>
          </form>
          <footer class="text-center mt-4">
            <a href="index.php" class="btn btn-secondary">Return to Task List</a>
          </footer>
        </div>
      </div>
    </main>

  </body>
</html>
