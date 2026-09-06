<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunsetTableGo &bull; Golden Hour Gastronomy & Nomadic Sunset Dining</title>
    <meta name="description" content="Discover SunsetTableGo: curated alfresco sunset feasts, wood-fired hearth cooking, heirloom harvests, and zero-proof botanical pairings along coastal bluffs.">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0LY0HY7L01');
</script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌅</text></svg>">
</head>
<body>
    <header class="site-header">
        <div class="container navbar">
            <a href="index.php" class="brand-logo">
                <span class="logo-badge">GOLDEN HOUR</span> SUNSETTABLEGO
            </a>
            <ul class="nav-links">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="about.html" class="nav-link">Philosophy</a></li>
                <li><a href="blog.html" class="nav-link">Chronicles</a></li>
                <li><a href="contact.html" class="nav-link">Reservations</a></li>
                <li><a href="contact.html" class="nav-cta">Book Sunset Table</a></li>
            </ul>
            <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
        </div>
    </header>

    <!-- SECTION 1: Golden Hour Panorama Hero -->
    <section class="hero-section">
        <div class="container hero-grid">
            <div class="hero-content">
                <div class="hero-badge-container">
                    <span>✨ Solar Cycle Gastronomy &bull; Golden Hour Seating</span>
                </div>
                <h1 class="hero-title">The Fine Art of <span class="highlight">Sunset Dining</span> & Nomadic Feasts</h1>
                <p class="hero-desc">Curated alfresco supper clubs, open hardwood hearth cooking, and handcrafted botanical elixirs orchestrated across breathtaking coastal bluffs, olive groves, and mountain ridges.</p>
                <div class="hero-actions">
                    <a href="#configurator" class="btn-primary">Sunset Table Builder</a>
                    <a href="#pillars" class="btn-secondary">Culinary Pillars</a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-num">4-5</div>
                        <div class="stat-label">Hearth Courses</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">50mi</div>
                        <div class="stat-label">Harvest Radius</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">100%</div>
                        <div class="stat-label">Zero-Proof Elixirs</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">Solar</div>
                        <div class="stat-label">Sunset Aligned</div>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-visual-card">
                    <img src="images/hero-sunset-coastal-dining-table.jpg" alt="Scenic sunset outdoor dining table overlooking coastal bluff at golden hour">
                    <div class="hero-float-badge">
                        <div>
                            <div style="font-weight: 700; color: #fff; font-size: 15px;">Pacific Bluff Sunset Banquet</div>
                            <div style="font-size: 12px; color: var(--accent-amber-light);">Hardwood Hearth &bull; Linen Tablescape</div>
                        </div>
                        <span style="background: var(--accent-terracotta); color: #fff; padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700;">SOLAR SERIES</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: Interactive Sunset Feast & Table Configurator -->
    <section class="section-pad" id="configurator">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Bespoke Gathering Builder</span>
                <h2 class="section-title">Interactive Sunset Table Configurator</h2>
                <p class="section-desc">Select your desired landscape setting, culinary theme, and ambient canopy to preview your bespoke golden hour dining experience.</p>
            </div>
            <div class="configurator-wrapper">
                <div class="config-options">
                    <div class="config-group">
                        <label>1. Natural Landscape Setting</label>
                        <div class="config-selectors">
                            <button class="config-btn active" data-setting="coastal">Pacific Ocean Bluff</button>
                            <button class="config-btn" data-setting="orchard">Ancient Olive Grove</button>
                            <button class="config-btn" data-setting="mountain">Alpine Ridge Horizon</button>
                            <button class="config-btn" data-setting="garden">Twilight Secret Garden</button>
                        </div>
                    </div>
                    <div class="config-group">
                        <label>2. Hearth & Culinary Theme</label>
                        <div class="config-selectors">
                            <button class="config-btn active" data-menu="hearth">Wood-Fired Coastal Feast</button>
                            <button class="config-btn" data-menu="harvest">Heirloom Garden Harvest</button>
                            <button class="config-btn" data-menu="artisan">Sourdough & Charred Roots</button>
                        </div>
                    </div>
                    <div class="config-group">
                        <label>3. Ambient Canopy & Illumination</label>
                        <div class="config-selectors">
                            <button class="config-btn active" data-canopy="candles">Floating Glass Lanterns</button>
                            <button class="config-btn" data-canopy="festoon">Festoon String Lights</button>
                            <button class="config-btn" data-canopy="stargaze">Open Stargazing Pergola</button>
                        </div>
                    </div>
                    <div style="margin-top: 10px;">
                        <a href="contact.html" class="btn-primary" style="width: 100%; justify-content: center;">Reserve Configured Sunset Table</a>
                    </div>
                </div>
                <div class="config-result-panel">
                    <img id="configResultImg" src="images/coastal-bluff-sunset-supper.jpg" alt="Configured Sunset Table Experience" class="config-result-img">
                    <h3 id="configResultTitle" class="config-result-title">Pacific Bluff Sunset Banquet</h3>
                    <p id="configResultDesc" style="font-size: 14px; margin-bottom: 0;">Overlooking ocean breakers at golden hour with open-hearth grilled wild catch and botanical sea salt infusions.</p>
                    <div class="config-result-specs">
                        <div class="config-spec-box">
                            <div class="spec-title">Seating</div>
                            <div id="specTiming" class="spec-val">18:30 Sunset</div>
                        </div>
                        <div class="config-spec-box">
                            <div class="spec-title">Tasting</div>
                            <div id="specCourses" class="spec-val">5-Course Feast</div>
                        </div>
                        <div class="config-spec-box">
                            <div class="spec-title">Infusion</div>
                            <div id="specPairing" class="spec-val">Citrus Thyme Tonic</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: The 6 Pillars of Sunset Table Gastronomy -->
    <section class="section-pad" id="pillars" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Culinary Foundation</span>
                <h2 class="section-title">The 6 Pillars of Golden Hour Gastronomy</h2>
                <p class="section-desc">Every SunsetTableGo gathering is constructed around astronomical solar cycles, authentic hardwood embers, and sustainable terroir.</p>
            </div>
            <div class="pillars-grid">
                <div class="pillar-card">
                    <div class="pillar-icon">🌅</div>
                    <h3>Circadian Solar Timing</h3>
                    <p>Each course is timed to coincide with distinct visual lighting phases—from pre-sunset golden illumination to deep twilight indigo skies.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">🔥</div>
                    <h3>Open Hardwood Hearth</h3>
                    <p>Traditional wood-fired cooking over aged white oak and olive orchard prunings, imparting delicate aromatic smoke notes without artificial fuels.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">🌱</div>
                    <h3>Hyper-Local 50-Mile Harvest</h3>
                    <p>100% of seasonal vegetables, heritage grains, and fresh wild catches sourced directly from organic farms within a fifty-mile radius.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">🍵</div>
                    <h3>Zero-Proof Botanical Elixirs</h3>
                    <p>Complex chilled tonics, cold-pressed orchard juices, and steam-distilled floral hydrosols paired harmoniously with each savory course.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">🏺</div>
                    <h3>Artisanal Earth Tablescapes</h3>
                    <p>Hand-loomed organic flax linen, handmade terracotta plates, beeswax candles, and sculpted olive wood serving platters.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">🪵</div>
                    <h3>Passive Thermal Comfort</h3>
                    <p>Wind-sheltered microclimate positioning, radiant heated soapstone footrests, and organic alpaca wool throws for cool twilight evenings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: Hardwood Hearth Smoke Chemistry Matrix -->
    <section class="section-pad">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Wood-Fired Alchemy</span>
                <h2 class="section-title">Hearth Wood & Smoke Flavor Chemistry</h2>
                <p class="section-desc">An empirical evaluation of hardwood combustion temperatures, lignin degradation compounds, and flavor profiles used in our outdoor hearths.</p>
            </div>
            <div class="matrix-table-wrap">
                <table class="matrix-table">
                    <thead>
                        <tr>
                            <th>Hardwood Species</th>
                            <th>Combustion Core Temp</th>
                            <th>Dominant Phenolic Compounds</th>
                            <th>Aromatic Notes</th>
                            <th>Culinary Course Pairing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Aged California White Oak</strong></td>
                            <td>420°C &ndash; 460°C</td>
                            <td>Syringol & Guaiacol</td>
                            <td>Mild vanilla, sweet smoke, clean roast</td>
                            <td>Wild Line-Caught Coastal Halibut</td>
                        </tr>
                        <tr>
                            <td><strong>Orchard Applewood Prunings</strong></td>
                            <td>380°C &ndash; 410°C</td>
                            <td>Eugenol & Isoeugenol</td>
                            <td>Fruity sweetness, gentle floral clove</td>
                            <td>Charred Heirloom Summer Squash</td>
                        </tr>
                        <tr>
                            <td><strong>Cured Wild Olive Wood</strong></td>
                            <td>440°C &ndash; 480°C</td>
                            <td>Vanillin & Alkylphenols</td>
                            <td>Rich earthy savory, nutty herbal crust</td>
                            <td>Whole Roasted Artichokes & Mushrooms</td>
                        </tr>
                        <tr>
                            <td><strong>Coastal Cedar Planks</strong></td>
                            <td>320°C (Indirect Steam)</td>
                            <td>Thujaplicin & Terpenes</td>
                            <td>Resinous evergreen, fragrant forest aroma</td>
                            <td>Wild King Salmon & Herb Butter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- SECTION 5: Seasonal Sunset Banquet & Feast Schedule -->
    <section class="section-pad" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Calendar of Feasts</span>
                <h2 class="section-title">Seasonal Solar Banquet Schedule</h2>
                <p class="section-desc">Four signature seasonal gatherings calibrated to equinox and solstice celestial alignments across California coastal landscapes.</p>
            </div>
            <div class="matrix-table-wrap">
                <table class="matrix-table">
                    <thead>
                        <tr>
                            <th>Gathering Title</th>
                            <th>Landscape Venue</th>
                            <th>Signature Course</th>
                            <th>Botanical Elixir</th>
                            <th>Seating Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Pacific Vernal Equinox Feast</strong></td>
                            <td>Santa Barbara Coastal Cliff</td>
                            <td>Cedar-Planked Wild Salmon with Sorrel</td>
                            <td>Sparkling Meyer Lemon & Rosemary Tonic</td>
                            <td>18:15 &ndash; 21:00</td>
                        </tr>
                        <tr>
                            <td><strong>Summer Solstice Olive Banquet</strong></td>
                            <td>Ojai Valley Heritage Orchard</td>
                            <td>Hearth-Charred Heirloom Melons & Greens</td>
                            <td>Cold-Pressed Lavender Pear Cordial</td>
                            <td>19:30 &ndash; 22:30</td>
                        </tr>
                        <tr>
                            <td><strong>Autumn Equinox Harvest Supper</strong></td>
                            <td>Santa Ynez Mountain Ridge</td>
                            <td>Ember-Roasted Truffled Root Vegetables</td>
                            <td>Spiced Orchard Apple & Ginger Press</td>
                            <td>17:45 &ndash; 20:30</td>
                        </tr>
                        <tr>
                            <td><strong>Winter Twilight Greenhouse Supper</strong></td>
                            <td>Montecito Glasshouse Pavilion</td>
                            <td>Slow-Simmered Wild Mushroom Ragout</td>
                            <td>Smoked Pine Needle & Cranberry Tea</td>
                            <td>16:45 &ndash; 19:30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- SECTION 6: Botanical Infusion & Zero-Proof Harmonizer -->
    <section class="section-pad">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Alchemy of the Garden</span>
                <h2 class="section-title">Zero-Proof Botanical Elixir Pairings</h2>
                <p class="section-desc">Crafted from distilled garden botanicals, cold-pressed orchard fruits, and mineral-rich spring waters to elevate each culinary course.</p>
            </div>
            <div class="pillars-grid">
                <div class="pillar-card">
                    <img src="images/botanical-herbal-infusion-drinks.jpg" alt="Botanical herbal infusion drink with fresh citrus" style="border-radius: var(--radius-sm); margin-bottom: 20px; height: 200px; width: 100%; object-fit: cover;">
                    <h3>Rosemary Citron Spritz</h3>
                    <p>Steam-distilled garden rosemary with cold-pressed coastal Eureka lemons, sparkling mountain spring water, and wild blossom honey.</p>
                    <div style="font-size: 13px; color: var(--accent-amber-light); font-weight: 600;">Paired with: First Course Coastal Salad</div>
                </div>
                <div class="pillar-card">
                    <img src="images/fresh-harvest-farm-produce-basket.jpg" alt="Fresh harvest farm produce basket with heirloom vegetables" style="border-radius: var(--radius-sm); margin-bottom: 20px; height: 200px; width: 100%; object-fit: cover;">
                    <h3>Smoked Orchard Pear Press</h3>
                    <p>Freshly crushed Bartlett pears infused with gentle applewood smoke essence, wild thyme blossoms, and cracked white peppercorn.</p>
                    <div style="font-size: 13px; color: var(--accent-amber-light); font-weight: 600;">Paired with: Main Wood-Fired Hearth Course</div>
                </div>
                <div class="pillar-card">
                    <img src="images/artisan-rustic-sourdough-bread.jpg" alt="Artisan rustic sourdough bread loaf" style="border-radius: var(--radius-sm); margin-bottom: 20px; height: 200px; width: 100%; object-fit: cover;">
                    <h3>Toasted Grain & Cardamom Tea</h3>
                    <p>Slow-steeped heirloom spelt grains roasted on the hearth, cracked green cardamom pods, and infused coastal sage water.</p>
                    <div style="font-size: 13px; color: var(--accent-amber-light); font-weight: 600;">Paired with: Artisanal Sourdough & Sweet Course</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7: Sunset Dining Gallery & Tablescape Archive -->
    <section class="section-pad" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Visual Chronicle</span>
                <h2 class="section-title">Sunset Tablescape Gallery & Field Archives</h2>
                <p class="section-desc">Glimpses into our nomadic dining setups, open-flame culinary preparations, and golden hour coastal gatherings.</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/wood-fired-open-hearth-cooking.jpg" alt="Chef grilling over wood-fired open hearth">
                    <div class="gallery-overlay">
                        <h4>Open Hearth Mastery</h4>
                        <p>Live hardwood fire cooking at sunset</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/candlelight-alfresco-tablescape.jpg" alt="Candlelight alfresco dining tablescape">
                    <div class="gallery-overlay">
                        <h4>Candlelit Tablescapes</h4>
                        <p>Organic linen & terracotta stoneware</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/gourmet-sunset-dinner-plate.jpg" alt="Gourmet sunset dinner plate presentation">
                    <div class="gallery-overlay">
                        <h4>Artisanal Plating</h4>
                        <p>Heirloom farm-to-table courses</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/sunset-table-ambiance-canopy.jpg" alt="Sunset dining celebration under twilight canopy">
                    <div class="gallery-overlay">
                        <h4>Twilight Celebrations</h4>
                        <p>Nomadic pavilions and golden skies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: Circadian Gastronomy & Sunset Sensory Dynamics -->
    <section class="section-pad">
        <div class="container">
            <div class="hero-grid" style="gap: 40px;">
                <div>
                    <span class="section-badge">Sensory Science</span>
                    <h2 class="section-title">Circadian Gastronomy & Sunset Physiology</h2>
                    <p class="section-desc">Dining at sunset stimulates human sensory biology in profound ways. As ambient sunlight shifts toward warm amber and infrared wavelengths, the human nervous system naturally transitions into rest-and-digest parasympathetic activation.</p>
                    <ul style="list-style: none; margin-left: 0;">
                        <li style="margin-bottom: 16px;">
                            <strong style="color: var(--accent-amber-light);">Golden Spectrum Illumination:</strong> Low-angle sunset light softens visual contrast, accentuating the natural red, orange, and golden pigments in freshly prepared food.
                        </li>
                        <li style="margin-bottom: 16px;">
                            <strong style="color: var(--accent-amber-light);">Olfactory Expansion:</strong> As twilight temperatures cool, ambient convective updrafts decrease, allowing aromatic wood smoke and herb oils to linger richly around the table.
                        </li>
                        <li style="margin-bottom: 16px;">
                            <strong style="color: var(--accent-amber-light);">Acoustic Resonance:</strong> Natural coastal surf and rustling leaves lower cortisol levels, heightening papillae taste bud sensitivity to umami and mineral notes.
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="images/intimate-twilight-garden-dinner.jpg" alt="Intimate twilight garden dinner table setting" class="hero-visual-card" style="height: 400px; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 9: The 4-Step Sourcing & Zero-Waste Farm Protocol -->
    <section class="section-pad" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Ecological Stewardship</span>
                <h2 class="section-title">The 4-Step Zero-Waste Farm Protocol</h2>
                <p class="section-desc">From sunrise harvest to evening feast, our closed-loop culinary cycle honors soil health and marine ecosystems.</p>
            </div>
            <div class="pillars-grid" style="grid-template-columns: repeat(4, 1fr);">
                <div class="pillar-card">
                    <div class="pillar-icon">1</div>
                    <h3>Dawn Harvest</h3>
                    <p>Produce is harvested at first morning light when sugar and moisture concentrations inside leaves and fruits are at their biological peak.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">2</div>
                    <h3>Whole-Plant Culinary</h3>
                    <p>Stems, peels, and tops are transformed into aromatic broth bases, infused vinegar reductions, and hearth-charred herb oils.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">3</div>
                    <h3>Zero Single-Use</h3>
                    <p>All service utilizes durable ceramic stoneware, cloth napkins, antique silverware, and reusable beeswax covers with zero single-use plastics.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">4</div>
                    <h3>Hearth Ash Composting</h3>
                    <p>Hardwood hearth ash and organic food scraps return directly to our partner farm compost beds as mineral-rich soil amendments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10: Patron & Culinary Critic Testimonials -->
    <section class="section-pad">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Guest Experiences</span>
                <h2 class="section-title">Reflections From Our Sunset Tables</h2>
                <p class="section-desc">Authentic impressions from culinary authors, naturalists, and private banquet patrons.</p>
            </div>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-quote">"Dining on the Pacific bluff as the sun melted into the ocean while tasting cedar-smoked salmon was the most sublime gastronomic moment of my year."</p>
                    <div class="review-author">
                        <h5>Julian Hawthorne</h5>
                        <span>Gastronomy Columnist &bull; San Francisco</span>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-quote">"The zero-proof botanical pairing was an absolute masterclass in flavor architecture. The rosemary citron spritz completely redefined non-alcoholic beverage craft."</p>
                    <div class="review-author">
                        <h5>Camille Rousseau</h5>
                        <span>Culinary Botanist &bull; Santa Barbara</span>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-quote">"SunsetTableGo curated our 20-person private orchard gathering with flawless hospitality. Warm soapstones for our feet and glowing candlelight created pure magic."</p>
                    <div class="review-author">
                        <h5>Harrison Brooks</h5>
                        <span>Private Event Host &bull; Los Angeles</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 11: Sunset Dining FAQ Accordion -->
    <section class="section-pad" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-head">
                <span class="section-badge">Guest Inquiries</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-desc">Helpful details on table reservations, weather contingencies, dietary preferences, and evening attire.</p>
            </div>
            <div class="faq-wrap">
                <div class="faq-card open">
                    <div class="faq-header">
                        <h4>What happens if weather conditions become unsuitable for outdoor dining?</h4>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-body">
                        Our culinary team constantly monitors localized meteorological conditions. In the event of coastal fog or high winds, gatherings transition seamlessly to our glasshouse pavilions or covered rustic pergolas, maintaining full panoramic sunset views with climate-controlled warmth.
                    </div>
                </div>
                <div class="faq-card">
                    <div class="faq-header">
                        <h4>Can dietary restrictions and plant-based preferences be accommodated?</h4>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-body">
                        Yes. Because our hearth feasts are crafted from whole heirloom produce, our chefs happily curate dedicated plant-based, gluten-conscious, and allergen-safe tasting courses with advanced reservation notice.
                    </div>
                </div>
                <div class="faq-card">
                    <div class="faq-header">
                        <h4>What attire is recommended for outdoor sunset dinners?</h4>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-body">
                        We recommend smart coastal casual attire with warm layers. As the sun sets, coastal temperatures naturally drop. We provide heated soapstone footrests and organic wool blankets to ensure continuous guest comfort.
                    </div>
                </div>
                <div class="faq-card">
                    <div class="faq-header">
                        <h4>Are children and family groups welcome at SunsetTableGo banquets?</h4>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-body">
                        We welcome guests of all ages at our private pavilion gatherings and select family-focused orchard banquets. Our communal supper club evenings are designed primarily for adult culinary appreciation.
                    </div>
                </div>
                <div class="faq-card">
                    <div class="faq-header">
                        <h4>How far in advance should private gatherings and pavilion feasts be reserved?</h4>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-body">
                        Due to seasonal farm sourcing and limited nomadic permits, private table bookings and group banquets should be requested 30 to 60 days in advance through our hospitality concierge.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 12: Direct Sunset Table Reservation CTA -->
    <section class="section-pad">
        <div class="container">
            <div class="cta-banner">
                <h2>Reserve Your Place at the Sunset Table</h2>
                <p style="color: var(--text-muted); max-width: 620px; margin: 0 auto 24px;">Experience the unforgettable harmony of golden hour light, open-hearth culinary arts, and convivial alfresco hospitality.</p>
                <form class="cta-form" id="contactForm">
                    <input type="email" placeholder="Enter guest reservation email" class="cta-input" required>
                    <button type="submit" class="btn-primary">Reserve Table</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="index.php" class="brand-logo" style="margin-bottom: 16px; display: inline-flex;">
                        <span class="logo-badge">GOLDEN HOUR</span> SUNSETTABLEGO
                    </a>
                    <p>Nomadic sunset dining experiences, wood-fired coastal harvests, and zero-proof botanical gastronomy curated at the intersection of solar cycles and seasonal terroir.</p>
                    <p style="font-size: 13px; color: var(--accent-amber-light); margin-top: 10px;">
                        840 Oceanview Promenade, Suite 300, Santa Barbara, CA 93101, United States<br>
                        Hospitality Concierge: +1-800-786-7388 | concierge@sunsettablego.com
                    </p>
                </div>
                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Dining Pavilions</a></li>
                        <li><a href="about.html">Culinary Philosophy</a></li>
                        <li><a href="blog.html">Sunset Chronicles</a></li>
                        <li><a href="contact.html">Concierge Desk</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal & Standards</h4>
                    <ul class="footer-links">
                        <li><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Terms of Service</a></li>
                        <li><a href="disclaimer.html">Dining Disclaimer</a></li>
                        <li><a href="cookies.html">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Sunset Dispatch</h4>
                    <p style="font-size: 14px;">Receive solar banquet dates, seasonal coastal harvest announcements, and private pavilion openings.</p>
                    <form class="cta-form" id="newsletterForm" style="margin: 0;">
                        <input type="email" placeholder="Enter guest email" class="cta-input" required>
                        <button type="submit" class="btn-primary" style="padding: 12px 20px; font-size: 13px;">Join</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <div>&copy; <?php echo date('Y'); ?> SunsetTableGo. All rights reserved. Golden Hour Gastronomy.</div>
                <div>Farm to Table &bull; Open Hearth Craft &bull; Botanical Pairings</div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
