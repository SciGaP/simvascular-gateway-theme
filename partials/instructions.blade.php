<div class="container">
  <div class="content">
    <div class="text-left">
      <h1 class="title top-space">Instructions</h1>

          <div class="media">
            <div class="media-body">
              <!-- <h2 class="media-heading">Description</h2> -->
              The instructions here guide users to create new accounts, create simualtion jobs, upload input/data files, run simualtion and download simulation results. 
            </div>
          </div>

          <!-- Creaat Account -->
          <div class="media">
            <div class="media-body">
              <h2 class="media-heading">Creat Account</h2>
              If you are a college student, or work in a research institute, please use "Sign in with CILogon". In this option, under "Select An Identity Provider", find your institute, then click "Log On" and sign in with your institute ID and password.
              <br>
              <br>
              If you can't find your institute, you need to create a new account by providing username, password, emal, name. 
              <br>
              Attention: after signing up, you can't access the computer resource until approved.
            </div>
          </div>

          <!-- Log in -->
          <div class="media">
            <div class="media-body">
              <h2 class="media-heading">Log In</h2>
              Based on the way you created your account, choose the corresponding way to log in.
            </div>
          </div>

          <!-- Create Project -->
          <div class="media">
            <div class="media-body">
              <h2 class="media-heading">Create/Browse Projects</h2>
              It's not required to create a new project. By default, "Default Poject" is already created for you. In one project, you can create multiple exeperiments (i.e. simulation jobs). 
              <br>
              <br>
              To browse existing projects: click "Project" -> "Browse" at the upper-left corner.
              <br>
              To create a new project: click "Project" -> "Create" at the upper-left corner.
            </div>
          </div>

          <!-- Create Experiments -->
          <div class="media">
            <div class="media-body">
              <h2 class="media-heading">Create/Browse Experiments (Simulation Jobs)</h2>
              To browse existing experiments: click "Experiment" -> "Browse" at the upper-left corner.
              <br>
              <br>
              To create a new experiment:
              <br>
              1. click "Experiment" -> "Create" at the upper-left corner.
              <br>
              2. Give a name and click "Continue".
              <br>
              3. Click the corresponding buttons "Choose File" to upload required files for simulation, such as geombc.dat.1, restart.0.1, bct.dat, solver.inp, numstart.dat. For certain complicated simulation, extra files can be uploaded as optional input files.
              <p style="margin-left: 20px">To create those input/data files from SimVascular: in SimVascular, after a job is set up, right click the job node in Data Manager and click "Export Data Files". Then, all files will be exported to a specified folder.</p>
              4. Specify compute resource.
              <br>
              5. Select a queue, specify the number of nodes and cores. ATTENTION: Our computer cluster has a limited number of nodes. Each node has 24 cores. Please choose appropriate queue, node and core numbers for your simulation job.
              <p style="margin-left: 20px">For a small simulatio job: choose queue "shared", 1 node, 1~23 cores.</p>
              <p style="margin-left: 20px">For a medium simulatio job: choose queue "compute", 1 node, 24 cores.</p>
              <p style="margin-left: 20px">For a large simulatio job: choose queue "compute", 2 node, 48 cores.</p>
              6. Provide email address to receive notifications (optional).
              <br>
              7. Click "Save and launch" to launch the simulation job. Attention: if all the nodes are occupied by other users, your job will be in the waiting queue until the number of nodes you request become available.
              <br>
              8. Gateway then shows a webpage about the status of the current experiment.
              <br>
              9. You can also browse an existing exepriment and click "Clone" to create a new experiment with the same parameters.
            </div>
          </div>

          <!-- Download -->
          <div class="media">
            <div class="media-body">
              <h2 class="media-heading">Download Results</h2>
              Once the experiment is completed ("Status" becomes "COMPLETED"), go to the experiment summary page, files are available in "Outputs", and you can download proc-xx.czf.tar.gz which contains all simulation results.You can also click "Open" in "Storage Directory" to get a list of all input and output files and download specific files.
            </div>
          </div>

    </div>
  </div>  
</div>