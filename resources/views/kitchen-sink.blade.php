@extends('layouts.app')
@section('header')
    <div data-sticky-container>
        <div class="top-bar" data-sticky data-margin-top="0" id="example-menu">
            <div class="top-bar-left">
                <ul class="menu">
                    <h1>Kitchen sink</h1>
                </ul>
            </div>
            <div class="top-bar-right">
            </div>
        </div>
    </div>
    @endsection
@section('content')
    <div class="large-12" style="padding-bottom: 20rem;">

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="large-3 cell">

                <ul class="magellan-menu vertical menu" data-magellan style="position: fixed; top: 100px;">
                    <li><a href="#accordions">Accordions</a></li>
                    <li><a href="#badges">Badges</a></li>
                    <li><a href="#breadcrumbs">Breadcrumbs</a></li>
                    <li><a href="#buttons">Buttons</a></li>
                    <li><a href="#headings">Headings</a></li>
                    <li><a href="#flash-notices">Flash Notices</a></li>
                    <li><a href="#forms">Forms</a></li>
                    <li><a href="#modals">Modals</a></li>
                    <li><a href="#off-canvas">Off-Canvas</a></li>
                    <li><a href="#pagination">Pagination</a></li>
                    <li><a href="#tabs">Tabs</a></li>
                    <li><a href="#tags">Tags</a></li>
                    <li><a href="#tooltips">Tooltips</a></li>
                    <li><a href="#typography">Typography</a></li>
                    <li><a href="#visibility">Visibility helpers</a></li>
                </ul>
            </div>
            <div class="large-9 cell">
                <div class="grid-x grid-padding-x grid-margin-x">

                    <section class="large-12 cell" id="accordions" data-magellan-target="accordions">
                        <h3><a href="https://get.foundation/sites/docs/accordion.html">Accordions</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <ul class="accordion" data-accordion>
                                <li class="accordion-item is-active" data-accordion-item>
                                    <a href="#" class="accordion-title">Accordion 1</a>
                                    <div class="accordion-content" data-tab-content >
                                        <p>Panel 1. Lorem ipsum dolor</p>
                                        <a href="#">Nowhere to Go</a>
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">Accordion 2</a>
                                    <div class="accordion-content" data-tab-content>
                                        <textarea></textarea>
                                        <button class="button">I do nothing!</button>
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title">Accordion 3</a>
                                    <div class="accordion-content" data-tab-content>
                                        Type your name!
                                        <input type="text">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>


                    <section class="large-12 cell" id="badges" data-magellan-target="badges">
                        <h3><a href="https://get.foundation/sites/docs/badge.html">Badges</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <span class="primary badge">1</span>
                            <span class="secondary badge">2</span>
                            <span class="success badge">3</span>
                            <span class="alert badge">A</span>
                            <span class="warning badge">B</span>
                        </div>
                    </section>

                    <section class="large-12 cell" id="breadcrumbs" data-magellan-target="breadcrumbs">
                        <h3><a href="https://get.foundation/sites/docs/breadcrumbs.html">Breadcrumbs</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <nav aria-label="You are here:" role="navigation">
                                <ul class="breadcrumbs">
                                    <li><a href="#0">Home</a></li>
                                    <li><a href="#0">Features</a></li>
                                    <li class="disabled">Gene Splicing</li>
                                    <li>
                                        <span class="show-for-sr">Current: </span> Cloning
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>

                    <section class="large-12 cell" id="buttons" data-magellan-target="buttons">
                        <h3><a href="https://get.foundation/sites/docs/button.html">Buttons</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <!-- Anchors (links) -->
                            <a href="about.html" class="button">Learn More</a>
                            <a href="#features" class="button">View All Features</a>

                            <!-- Buttons (actions) -->
                            <button type="button" class="success button">Save</button>
                            <button type="button" class="flash-notice button">Delete</button>

                            <a class="button tiny" href="#">So Tiny</a>
                            <a class="button small" href="#">So Small</a>
                            <a class="button" href="#">So Basic</a>
                            <a class="button large" href="#">So Large</a>
                            <a class="button expanded" href="#">Such Expand</a>
                            <a class="button small expanded" href="#">Wow, Small Expand</a>

                            <button class="hollow button" href="#">Primary</button>
                            <button class="hollow button secondary" href="#">Secondary</button>
                            <button class="hollow button success" href="#">Success</button>
                            <button class="hollow button alert" href="#">Alert</button>
                            <button class="hollow button warning" href="#">Warning</button>
                            <button class="hollow button" href="#" disabled>Disabled</button>
                        </div>
                    </section>

                    <section class="large-12 cell"  id="headings" data-magellan-target="headings">
                        <h3>Headings</h3>
                        <hr>
                        <div class="flash-notice">
                            <h1>h1. This is a very large header.</h1>
                            <h2>h2. This is a large header.</h2>
                            <h3>h3. This is a medium header.</h3>
                            <h4>h4. This is a moderate header.</h4>
                            <h5>h5. This is a small header.</h5>
                            <h6>h6. This is a tiny header.</h6>
                        </div>
                    </section>

                    <section class="large-12 cell" id="flash-notices" data-magellan-target="flash-notices">
                        <h3><a href="https://get.foundation/sites/docs/callout.html">Flash notice / Callouts</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <div class="flash-notice">
                                <h5>This is a callout.</h5>
                                <p>It has an easy to override visual style, and is appropriately subdued.</p>
                                <a href="#0">It's dangerous to go alone, take this.</a>
                            </div>

                            <div class="flash-notice primary">
                                <h5>This is a primary callout.</h5>
                                <p>It has an easy to override visual style, and is appropriately subdued.</p>
                                <a href="#0">It's dangerous to go alone, take this.</a>
                            </div>

                            <div class="flash-notice secondary">
                                <h5>This is a secondary callout</h5>
                                <p>It has an easy to override visual style, and is appropriately subdued.</p>
                                <a href="#0">It's dangerous to go alone, take this.</a>
                            </div>

                            <div class="flash-notice success">
                                <h5>This is a success callout</h5>
                                <p>It has an easy to override visual style, and is appropriately subdued.</p>
                                <a href="#0">It's dangerous to go alone, take this.</a>
                            </div>

                            <div class="flash-notice warning">
                                <h5>This is a warning callout</h5>
                                <p>It has an easy to override visual style, and is appropriately subdued.</p>
                                <a href="#0">It's dangerous to go alone, take this.</a>
                            </div>

                            <div class="flash-notice alert">
                                <h5>This is an alert callout</h5>
                                <p>It has an easy to override visual style, and is appropriately subdued.</p>
                                <a href="#0">It's dangerous to go alone, take this.</a>
                            </div>
                        </div>
                    </section>

                    <section class="large-12 cell" id="forms" data-magellan-target="forms">
                        <h3><a href="https://get.foundation/sites/docs/forms.html">Forms</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <form>
                                <label>Input Label
                                    <input type="text" placeholder=".small-12.columns" aria-describedby="exampleHelpText">
                                </label>
                                 <label>
                                    How many puppies?
                                    <input type="number" value="0" min="10" step="10">
                                    <p class="help-text invalid">A minimum of 10 puppies is required.</p>
                                </label>
                                <label>
                                    What books did you read over summer break?
                                    <textarea placeholder="None"></textarea>
                                </label>
                                <label>Select Menu
                                    <select>
                                        <option value="husker">Husker</option>
                                        <option value="starbuck">Starbuck</option>
                                        <option value="hotdog">Hot Dog</option>
                                        <option value="apollo">Apollo</option>
                                    </select>
                                </label>
                                <div class="grid-x grid-margin-x">
                                    <fieldset class="cell large-6">
                                        <legend>Choose Your Favorite</legend>
                                        <input type="radio" name="pokemon" value="Red" id="formRed" required><label for="formRed">Red</label>
                                        <input type="radio" name="pokemon" value="Blue" id="formBlue"><label for="formBlue">Blue</label>
                                        <input type="radio" name="pokemon" value="Yellow" id="formYellow"><label for="formYellow">Yellow</label>
                                    </fieldset>
                                    <fieldset class="cell large-6">
                                        <legend>Check these out</legend>
                                        <input id="formCheckbox1" type="checkbox"><label for="formCheckbox1">Checkbox 1</label>
                                        <input id="formCheckbox2" type="checkbox"><label for="formCheckbox2">Checkbox 2</label>
                                        <input id="formCheckbox3" type="checkbox"><label for="formCheckbox3">Checkbox 3</label>
                                    </fieldset>
                                </div>
                                <div class="grid-x grid-margin-x">
                                    <div class="cell small-3">
                                        <label for="middle-label" class="text-right middle">Label</label>
                                    </div>
                                    <div class="cell small-9">
                                        <input type="text" id="middle-label" placeholder="Right- and middle-aligned text input">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-label">$</span>
                                    <input class="input-group-field" type="url">
                                    <div class="input-group-button">
                                        <input type="submit" class="button" value="Submit">
                                    </div>
                                </div>

                                <p class="help-text error">There was an error processing you submission.</p>
                                <p class="help-text success">Thank you for your submission.</p>

                            </form>
                        </div>
                    </section>

                    <section class="large-12 cell" id="modals" data-magellan-target="modals">
                        <h3><a href="https://get.foundation/sites/docs/reveal.html">Modals / Reveal</a></h3>
                        <hr>
                        <div class="flash-notice">

                            <div class="modal" id="exampleModal1" data-reveal>
                                <h1>Awesome. I Have It.</h1>
                                <p class="lead">Your couch. It is mine.</p>
                                <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
                                <button class="close-button" data-close aria-label="Close modal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <p><button class="button" data-open="exampleModal1">Click me for a modal</button></p>

                        </div>
                    </section>

                    <section class="large-12 cell" id="off-canvas" data-magellan-target="off-canvas">
                        <h3><a href="https://get.foundation/sites/docs/off-canvas.html">Off-Canvas</a></h3>
                        <hr>
                        <div class="flash-notice">

                            <button type="button" class="button" data-toggle="offCanvasLeft1">Open Left</button>
                            <button type="button" class="button" data-toggle="offCanvasRight1">Open Right</button>
                            <button type="button" class="button" data-toggle="offCanvasTop1">Open Top</button>
                            <button type="button" class="button" data-toggle="offCanvasBottom1">Open Bottom</button>

                            <div class="cell">
                                <div class="off-canvas-wrapper">
                                    <div class="off-canvas position-left" id="offCanvasLeft1" data-off-canvas>
                                        <!-- Your menu or Off-canvas content goes here -->
                                    </div>
                                    <div class="off-canvas position-right" id="offCanvasRight1" data-off-canvas>
                                        <!-- Your menu or Off-canvas content goes here -->
                                    </div>
                                    <div class="off-canvas position-top" id="offCanvasTop1" data-off-canvas>
                                        <!-- Your menu or Off-canvas content goes here -->
                                    </div>
                                    <div class="off-canvas position-bottom" id="offCanvasBottom1" data-off-canvas>
                                        <!-- Your menu or Off-canvas content goes here -->
                                    </div>
                                    <div class="off-canvas-content" data-off-canvas-content>
                                        <img src="https://placehold.it/300x300" class="" height="" width="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="large-12 cell" id="pagination" data-magellan-target="pagination">
                        <h3><a href="https://get.foundation/sites/docs/pagination.html">Pagination</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <ul class="pagination" role="navigation" aria-label="Pagination">
                                <li class="disabled">Previous <span class="show-for-sr">page</span></li>
                                <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                                <li><a href="#0" aria-label="Page 2">2</a></li>
                                <li><a href="#0" aria-label="Page 3">3</a></li>
                                <li><a href="#0" aria-label="Page 4">4</a></li>
                                <li class="ellipsis" aria-hidden="true"></li>
                                <li><a href="#0" aria-label="Page 12">12</a></li>
                                <li><a href="#0" aria-label="Page 13">13</a></li>
                                <li><a href="#0" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
                            </ul>
                        </div>
                    </section>

                    <section class="large-12 cell" id="tabs" data-magellan-target="tabs">
                        <h3><a href="https://get.foundation/sites/docs/tabs.html">Tabs</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <ul class="tabs" data-tabs id="example-tabs">
                                <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
                                <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
                                <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
                                <li class="tabs-title"><a href="#panel4">Tab 4</a></li>
                                <li class="tabs-title"><a href="#panel5">Tab 5</a></li>
                                <li class="tabs-title"><a href="#panel6">Tab 6</a></li>
                            </ul>

                            <div class="tabs-content" data-tabs-content="example-tabs">
                                <div class="tabs-panel is-active" id="panel1">
                                    <p>One</p>
                                    <p>Check me out! I'm a super cool Tab panel with text content!</p>
                                </div>
                                <div class="tabs-panel" id="panel2">
                                    <p>Two</p>
                                    <img class="thumbnail" src="assets/img/generic/rectangle-7.jpg" alt="">
                                </div>
                                <div class="tabs-panel" id="panel3">
                                    <p>Three</p>
                                    <p>Check me out! I'm a super cool Tab panel with text content!</p>
                                </div>
                                <div class="tabs-panel" id="panel4">
                                    <p>Four</p>
                                    <img class="thumbnail" src="assets/img/generic/rectangle-2.jpg" alt="">
                                </div>
                                <div class="tabs-panel" id="panel5">
                                    <p>Five</p>
                                    <p>Check me out! I'm a super cool Tab panel with text content!</p>
                                </div>
                                <div class="tabs-panel" id="panel6">
                                    <p>Six</p>
                                    <img class="thumbnail" src="assets/img/generic/rectangle-8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="large-12 cell" id="tags" data-magellan-target="tags">
                        <h3><a href="https://get.foundation/sites/docs/label.html">Tags / Labels</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <span class="primary tags">Primary Label</span>
                            <span class="secondary tags">Secondary Label</span>
                            <span class="success tags">Success Label</span>
                            <span class="alert tags">Alert Label</span>
                            <span class="warning tags">Warning Label</span>
                        </div>
                    </section>

                    <section class="large-12 cell" id="tooltips" data-magellan-target="tooltips">
                        <h3><a href="https://get.foundation/sites/docs/tooltip.html">Tooltips</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <p> The <strong data-tooltip class="top more-info" tabindex="2" title="Fancy word for a beetle.">scarabaeus</strong>
                                hung quite clear of any branches, and, if allowed to fall, would have fallen at our feet.</p>
                        </div>
                    </section>

                    <section class="large-12 cell" id="typography" data-magellan-target="typography">
                        <h3><a href="https://get.foundation/sites/docs/typography-base.html">Typography</a></h3>
                        <hr>
                        <div class="flash-notice">

                            <p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, did you know that there are storms occurring on Jupiter that are larger than the Earth? Pretty cool. Wrap strong around type to <strong>make it bold!</strong>. You can also use em to <em>italicize your words</em>.</p>

                            <blockquote>
                                Those people who think they know everything are a great annoyance to those of us who do.
                                <cite>Isaac Asimov</cite>
                            </blockquote>

                            <ul>
                                <li>List item with a much longer description or more content.</li>
                                <li>List item</li>
                                <li>List item
                                    <ul>
                                        <li>Nested list item</li>
                                        <li>Nested list item</li>
                                        <li>Nested list item</li>
                                    </ul>
                                </li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                            </ul>

                            <ol>
                                <li>Cheese (essential)</li>
                                <li>Pepperoni</li>
                                <li>Bacon
                                    <ol>
                                        <li>Normal bacon</li>
                                        <li>Canadian bacon</li>
                                    </ol>
                                </li>
                                <li>Sausage</li>
                                <li>Onions</li>
                                <li>Mushrooms</li>
                            </ol>

                            <dl>
                                <dt>Time</dt>
                                <dd>The indefinite continued progress of existence and events in the past, present, and future regarded as a whole.</dd>
                                <dt>Space</dt>
                                <dd>A continuous area or expanse that is free, available, or unoccupied.</dd>
                                <dd>The dimensions of height, depth, and width within which all things exist and move.</dd>
                            </dl>

                            <a href="#">Hyper-Links</a>
                        </div>
                    </section>

                    <section class="large-12 cell" id="visibility" data-magellan-target="visibility">
                        <h3><a href="https://get.foundation/sites/docs/visibility.html">Visibility Classes</a></h3>
                        <hr>
                        <div class="flash-notice">
                            <p>You are on a small screen or larger.</p>
                            <p class="show-for-medium">You are on a medium screen or larger.</p>
                            <p class="show-for-large">You are on a large screen or larger.</p>
                            <p class="show-for-small-only">You are <em>definitely</em> on a small screen.</p>
                            <p class="show-for-medium-only">You are <em>definitely</em> on a medium screen.</p>
                            <p class="show-for-large-only">You are <em>definitely</em> on a large screen.</p>

                            <p class="hide-for-medium">You are <em>not</em> on a medium screen or larger.</p>
                            <p class="hide-for-large">You are <em>not</em> on a large screen or larger.</p>
                            <p class="hide-for-small-only">You are <em>definitely not</em> on a small screen.</p>
                            <p class="hide-for-medium-only">You are <em>definitely not</em> on a medium screen.</p>
                            <p class="hide-for-large-only">You are <em>definitely not</em> on a large screen.</p>
                            <p class="hide">Can't touch this.</p>

                            <p class="invisible">Can sort of touch this.</p>

                            <p class="show-for-landscape">You are in landscape orientation.</p>
                            <p class="show-for-portrait">You are in portrait orientation.</p>

                            <p class="show-for-sr">This text can only be read by a screen reader.</p>
                            <p>There's a line of text above this one, you just can't see it.</p>

                            <p aria-hidden="true">This text can be seen, but won't be read by a screen reader.</p>

                            <p><a class="show-on-focus" href="#mainContent">Skip to Content</a></p>
                            <header id="header" role="banner">
                            </header>
                            <main id="mainContent" role="main" tabindex="0">
                            </main>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
@endsection