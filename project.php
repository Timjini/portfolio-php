<?php
// Step 1: Get the project name from the URL
$projectName = isset($_GET['slug']) ? $_GET['slug'] : '';

if (empty($projectName)) {
    die('Project name is missing.');
}

// Step 2: Load the projects JSON file
$jsonFile = './data/projects.json';
$jsonData = file_get_contents($jsonFile);
$projects = json_decode($jsonData, true);

// Step 3: Find the project by name 
$project = null;
foreach ($projects as $p) {
    if ($p['slug'] === $projectName) {
        $project = $p;
        break;
    }
}

// Step 4: Display the project content or an error message
if ($project) {
    $title = htmlspecialchars($project['title']);
    $description = htmlspecialchars($project['description']);
    $stack = htmlspecialchars($project['stack']);
    $paragraphDetail = htmlspecialchars($project['paragraphDetail']);
    $key1 = htmlspecialchars($project['key1']);
    $keyTitle1 = htmlspecialchars($project['keyTitle1']);
    $key2 = htmlspecialchars($project['key2']);
    $keyTitle2 = htmlspecialchars($project['keyTitle2']);
    $key3 = htmlspecialchars($project['key3']);
    $keyTitle3 = htmlspecialchars($project['keyTitle3']);
    $finalDetail = htmlspecialchars($project['finalDetail']);
} else {
    $title = "Project Not Found";
    $description = "The project you are looking for does not exist.";
    $details = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <?php include 'includes/header.php'; ?>
</head>
<body class="project">
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
            <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                <a href="/" class="material-symbols-outlined">
                chevron_left
                </a>
                <p class="text-base font-semibold leading-7 text-indigo-600"><?php echo $stack?></p>
                <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank">
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo $title ?></h1>
                </a>
                <div class="widget widget-lg">
                    <a class="btn" href="<?php echo htmlspecialchars($project['github']); ?>" rel="noopener" target="_blank" aria-label="Follow @HasinHayder on GitHub">
                        <svg viewBox="0 0 16 16" width="24" height="24" class="octicon octicon-mark-github" aria-hidden="true">
                            <path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z">

                            </path>
                        </svg>
                    </a>
                </div>
                <p class="mt-6 text-xl leading-8 text-gray-700"><?php echo $description ?></p>
                </div>
            </div>
            </div>
            <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank">
                <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="<?php echo htmlspecialchars($project['image']); ?>" alt="">
            </a>    
        </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                <p><?php echo $paragraphDetail?></p>
                <ul role="list" class="mt-8 space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                    </svg>
                    <span><strong class="font-semibold text-gray-900"><?php echo $keyTitle1 ?></strong> <?php echo $key1 ?></span>
                    </li>
                    <li class="flex gap-x-3">
                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                    </svg>
                    <span><strong class="font-semibold text-gray-900"><?php echo $keyTitle2 ?></strong> <?php echo $key2 ?></span>
                    </li>
                    <li class="flex gap-x-3">
                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                        <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                    </svg>
                    <span><strong class="font-semibold text-gray-900"><?php echo $keyTitle3 ?></strong> <?php echo $key3 ?></span>
                    </li>
                </ul>
                <p class="mt-8"><?php echo $finalDetail ?></p>
                <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900 hidden"></h2>
                <p class="mt-6 hidden"></p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
