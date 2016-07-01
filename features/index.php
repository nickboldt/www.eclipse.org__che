<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Features';
  // Define body class
  $bodyClass = 'features';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid" id="top">
    <h1>Features</h1>
    <h3>Eclipse Che is the only open source cloud IDE with RESTful workspaces and Docker-based machines. It's as powerful as it sounds. Take a deeper look.</h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">
  <h2>Quick Links</h2>
  <div class="row quick-links">
    <ul class="col-sm-4">
      <li><a href="#new-workspace">Workspaces with Runtimes</a></li>
      <li><a href="#docker-powered">Docker Machines</a></li>
      <li><a href="#workspace-agents">Workspace Agents</a></li>
      <li><a href="#snapshot">Workspace Snapshots</a></li>
      <li><a href="#collaborative">Collaborative Workspaces</a></li>
      <li><a href="#restful-workspaces">RESTful Workspaces</a></li>
      <li><a href="#ssh">SSH / Terminal</a></li>
    </ul>

    <ul class="col-sm-4">
      <li><a href="#cloud-ide">Cloud IDE</a></li>
      <li><a href="#ioe">Integrated Ops Environment</a></li>
      <li><a href="#multi-machine">Multi-Machine</a></li>
      <li><a href="#multi-project">Multi-Project</a></li>
      <li><a href="#commands">Commands</a></li>
      <li><a href="#previews">Previews</a></li>
      <li><a href="#intellisense-java">Java Intellisense</a></li>
    </ul>

    <ul class="col-sm-4">    
      <li><a href="#intellisense-js-html-css">JavaScript Intellisense</a></li>
      <li><a href="#light-theme">Light Theme</a></li>
      <li><a href="#plug-in">Plug-Ins</a></li>
      <li><a href="#open-source">Open Source</a></li>
      <li><a href="#love">Dogfooded With Love</a></li>
    </ul>
  </div> <!-- /.quick-links -->


  <div class="row" id="new-workspace">
    <div class="col-sm-6">
      <h2>Workspaces with Runtimes</h2>
      <p>Workspaces are composed of projects (files) and environments (runtimes). Workspace configuration is persisted as versionable assets used to create portable replicas. Migrate workspace projects and runtimes to other Che instances, whether localhost or in the cloud. Receiving systems use the configuration to create an identical workspace state matching the source system. Che manages your workspace lifecycle, both orchestrating project state and booting / suspending / imaging / stopping / destroying workspace runtime environments.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-a-new-kind-of-workspace.png"><img alt="" class="img-responsive" src="../images/features/img-features-a-new-kind-of-workspace.png" /></a>
    </div>
  </div>

  
  <div class="row" id="docker-powered">
    <div class="col-sm-6">
      <h2>Docker Machines</h2>
      <p>An environment is composed of machines powered by Docker or localhost. A machine is a runtime whose stack is instantiated by a recipe. Docker is a powerful and convenient implementation of machines providing near-instant activation, copy-on-write file system, and Dockerfile recipes for constructing custom stacks. Launch from our provided images, DockerHub, private registries, or through your own Dockerfiles. Your projects are mounted into the workspace. If using a remote workspace server projects are rsync'd with long term project storage.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-docker-powered.png"><img alt="" class="img-responsive" src="../images/features/img-features-docker-powered.png" /></a>
    </div>
  </div>

  <div class="row" id="workspace-agents">
    <div class="col-sm-6">
      <h2>Workspace Agents</h2>
      <p>Every workspace has one special environment called the "workspace machine" that is started when the workspace is opened, and suspended when the workspace is closed. Workspace machines provide developer services to the workspace including intellisense, machine monitoring, SSH access, and remote debugging. Che installs "workspace agents" into your machines to provide these services to your browser and the Che server. Workspace agents are injected based upon the types of projects launched by users and can be provided by plug-in authors.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-workspace-agents.png"><img alt="" class="img-responsive" src="../images/features/img-features-workspace-agents.png" /></a>
    </div>
  </div>
  
  <div class="row" id="snapshot">
    <div class="col-sm-6">
      <h2>Workspace Snapshots</h2>
      <p>Save your workspace runtime state with a snapshot. While projects are persisted on disk, workspace environment state is machine internal. For example, a maven project stores a repository of downloads that are not part of the project, but part of the workspace. Snapshots let users capture, save, and re-constitute this state. Make snapshots for workspace machines, which are stored as Docker images in a configured registry. Reopening the workspace instantiates a new workspace machine from the snapshot with the projects then mounted. This leads to superior long term performance as snapshot re-activation is immediate.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-workspace-snapshots.png"><img alt="" class="img-responsive" src="../images/features/img-features-workspace-snapshots.png" /></a>
    </div>
  </div>

  
  <div class="row" id="collaborative">
    <div class="col-sm-6">
      <h2>Collaborative Workspaces</h2>
      <p>Host Eclipse Che as a workspace server, providing shared access to programming services to workspaces and teams. Workspace environments are given a hostname and accessible by remote clients.</p>
      <p>Host numerous workspaces concurrently, bounded by your system's disk and memory. Workspaces are isolated; users creating multiple workspaces will not have runtime conflicts with others. Workspaces can be shared amongst users by concurrent access to projects and environments. Che currently uses a last-write-wins policy during simultaneous file access, and will add multi-cursor visuals soon.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-collaborative-workspace-server.png"><img alt="" class="img-responsive" src="../images/features/img-features-collaborative-workspace-server.png" /></a>
    </div>
  </div>

  <div class="row" id="restful-workspaces">
    <div class="col-sm-6">
      <h2>RESTful Workspaces</h2>
      <p>All Che services are reachable through RESTful APIs. Che exposes APIs for managing the workspace master, and also provides RESTful access to each individual workplace through the workspace agent. The Che workspace master provides workspace orchestration and user management. In each workspace agent is a micro Che server that exposes project-specific APIs. For example, Che has RESTful JDT wrappers to enable 100+ forms of distributed Java intellisense. This Java-specific API is injected as a workspace agent by Che. Programming the API is simple - get started by <a href="https://eclipse-che.readme.io/docs/rest-api">browsing our APIs with Swagger</a>.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-RESTful.png"><img alt="" class="img-responsive" src="../images/features/img-features-RESTful.png" /></a>
    </div>
  </div>
  
  <div class="row" id="ssh">
    <div class="col-sm-6">
      <h2>SSH / Terminal</h2>
      <p>Che injects an SSH daemon into workspace machines. Connect your existing IDE - Eclipse if you like - with an SSH sync point. Upload your key pair or have Che generate a new pair for each workspace. You can also access your workspace with Che's browser terminal, giving you root access to workspace machines.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-ssh-workspaces.png"><img alt="" class="img-responsive" src="../images/features/img-features-ssh-workspaces.png" /></a>
    </div>
  </div>

  
  <div class="row" id="cloud-ide">
    <div class="col-sm-6">
      <h2>Cloud IDE</h2>
      <p>A no-installation browser IDE and IOE accessible from any local or remote device. Thin, fast, and beautiful - it's the IDE our own engineers wanted. The IDE is packaged as cross-browser JavaScript and CSS, hosted as resources cached by browsers. Work on multiple workspaces in different browser tabs with each tab consuming ~100MB of RAM. It's a smoother interactive experience that doesn't suffer blockages from thrashing when the workspace is remote.</p>
      <p>The tools you expect are there: embedded Orion editor, numerous key bindings, globalized keyboard support, and git / subversion tools including diff.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-cloud-ide.png"><img alt="" class="img-responsive" src="../images/features/img-features-cloud-ide.png" /></a>
    </div>
  </div>

  
  <div class="row" id="ioe">
    <div class="col-sm-6">
      <h2>Integrated Ops Environment</h2>
      <p>The Che provides dual perspectives: developer and operations. The operations perspective provides a topological view of environments with utilities to define, monitor, and marry machines to code. The operations perspective enables a world where workspace environments match production topologies, letting users import base images from registries while pushing tagged images with project code back to a registry.</p>
      <p>This is in development now, with input from our community.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-integrated-operations-environment.png"><img alt="" class="img-responsive" src="../images/features/img-features-integrated-operations-environment.png" /></a>
    </div>
  </div>

  
  <div class="row" id="multi-machine">
    <div class="col-sm-6">
      <h2>Multi-Machine</h2>
      <p>Workspaces can launch multiple machines - useful for having separate runtimes for testing projects. Users provide the machine recipes and control their lifecycles. Multi-machine workspaces move us closer to development-production parity, where a developer can locally debug a topology of containers or microservices identical to what is running in production.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-multi-machine-workspaces.png"><img alt="" class="img-responsive" src="../images/features/img-features-multi-machine-workspaces.png" /></a>
    </div>
  </div>

  
  <div class="row" id="multi-project">
    <div class="col-sm-6">
      <h2>Multi-Project</h2>
      <p>Che is a true IDE platform, recognizing projects are bound to a repository and given a type. Project types bestow special behaviors, such as when Che injects the RESTful JDT core into workspace machines when Java projects are added. Workspaces can have multiple projects, each with their own type. Projects can be independently built and run, even though all projects share a common workspace machine. Currently, Che has limited project types for JavaScript, Maven, and ‘blank’. <a href="https://eclipse-che.readme.io/docs/contribute">We'll collaborate with the ecosystem</a> to package new types for frameworks, packaging systems and programming languages.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-multi-project-workspaces.png"><img alt="" class="img-responsive" src="../images/features/img-features-multi-project-workspaces.png" /></a>
    </div>
  </div>

  
  <div class="row" id="commands">
    <div class="col-sm-6">
      <h2>Commands</h2>
      <p>A command is a process that is injected into a machine. Commands are provided by users, workspaces, or projects. Commands have a type, like projects, which imbue additional behaviors. For example, the maven command type has inherent knowledge of how maven lifecycle phases operate. When executed, a command is translated into a process and injected into a machine, where it can operate against projects or other resources within the machine itself. Commands are context sensitive, allowing a user to execute commands across projects and modules, getting context-specific outcomes.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>


    <div class="col-sm-6">
      <a href="../images/features/img-features-commands.png"><img alt="" class="img-responsive" src="../images/features/img-features-commands.png" /></a>
    </div>
  </div>

  
  <div class="row" id="previews">
    <div class="col-sm-6">
      <h2>Previews</h2>
      <p>Create custom previews that launch files and web pages with the context of your projects and workspaces. Embed preview intelligence inside of commands and workspaces so that logic on how to launch and debug your project travels wherever your workspace goes.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-previews.png"><img alt="" class="img-responsive" src="../images/features/img-features-previews.png" /></a>
    </div>
  </div>

  
  <div class="row" id="intellisense-java">
    <div class="col-sm-6">
      <h2>Java Intellisense</h2>
      <p>Over 100 forms of Java content assist that are so responsive that you will do a double take. Features include modules (sub-folders that can be independently built and run), multi-module structures, dozens of intellisense, multiple forms of refactoring, an embedded debugger, JavaDoc, jump to definition, and class structure navigation.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-intellisense-java.png"><img alt="" class="img-responsive" src="../images/features/img-features-intellisense-java.png" /></a>
    </div>
  </div>

  
  <div class="row" id="intellisense-js-html-css">
    <div class="col-sm-6">
      <h2>JavaScript Intellisense</h2>
      <p>The <a href="https://orionhub.org/">Orion editor</a> provides dozens of assistants for interpreted languages including JavaScript (and even some hidden templating for Go)! Autocomplete, error marking, recommendations, documentation, and jump to definitions are exposed and ready to go.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-intellisense-javascript.png"><img alt="" class="img-responsive" src="../images/features/img-features-intellisense-javascript.png" /></a>
    </div>
  </div>

</div>

<div class="tech">
  <div class="container-fluid content">
    <div class="row" id="light-theme">
      <div class="col-sm-6">
          <h2>Light Theme</h2>
          <p>Che, like Yoda, wants to bring balance to the force. Flip a switch and transform the IDE with a dark or light theme. </p>
          <p><a href="#top">Back to Top</a></p>
      </div>
      <div class="col-sm-6">
        <a href="../images/features/img-features-light-theme.png"><img alt="" class="img-responsive" src="../images/features/img-features-light-theme.png" /></a>
      </div>

    </div>
  </div>
</div> <!-- .tech -->

<div class="container-fluid content">

  <div class="row" id="plug-in">
    <div class="col-sm-6">
      <h2>Plug-In Framework</h2>
      <p>Che is extensible, by customizing built-in plug-ins or authoring your own extensions. Package plug-ins with Che core to create new assemblies installable by your user base. You can write IDE, Che server, or workspace agent plug-ins, with Che injecting the plug-in into the right location at the right time.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-plugin-framework.png"><img alt="" class="img-responsive" src="../images/features/img-features-plugin-framework.png" /></a>
    </div>
  </div>

  
  <div class="row" id="open-source">
    <div class="col-sm-6">
      <h2>Open Source to the Core</h2>
      <p>Eclipse Che has been developed over 4 years with contributions from Codenvy, eXo Platform, IBM, SAP, Microsoft, Intuit, WSO2, Serli, RedHat, and open source individuals from China, Brazil, France, Ukraine, Russia, Canada, India, Sri Lanka, and the United States. It is part of the Eclipse Cloud Development top-level project, and ecosystem contributions are open and encouraged. </p>
      <p>Please participate, even if only spiritually. There are many ways to get involved including starring the <a href="https://github.com/codenvy/che/stargazers">GitHub repo</a>, <a href="https://github.com/codenvy/che/issues">submitting issues</a>, <a href="https://eclipse-che.readme.io/docs/">writing docs</a>, or <a href="https://eclipse-che.readme.io/docs/plug-ins">contributing plug-ins</a>.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-open-source-core.png"><img alt="" class="img-responsive" src="../images/features/img-features-open-source-core.png" /></a>
    </div>
  </div>

  
  <div class="row" id="love">
    <div class="col-sm-6">
      <h2>Dogfooded With Love</h2>
      <p>We built the product that we would love to use everyday. To do that you must build what you eat and eat what you built. Love -- and sometimes frustration -- has poured into Che as our engineers weaned off their favorite IDEs to build Che with Che.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-dogfooded.png"><img alt="" class="img-responsive" src="../images/features/img-features-dogfooded.png" /></a>
    </div>
  </div>
</div> <!-- .container-fluid -->


<div class="twitter-share">
  <h6><i class="fa fa-twitter"></i> Was this page helpful? <a href="https://twitter.com/share">Share it on Twitter</a></h6>
</div>



<?php include '../includes/footer.php'; ?>