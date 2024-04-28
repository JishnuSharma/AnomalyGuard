<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ABOUT THE DBSCAN ALGORITHM') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="algo-head-section">
            <div class="algo-heading-title">
                DBSCAN (Density-Based Spatial Clustering of Applications with Noise)
            </div>
        </div>
        <div class="algo-content-section">
            <div class="what-algo-section">
                <ul>
                    <li>
                        DBSCAN is a popular clustering algorithm in data mining and machine learning. Unlike 
                        traditional clustering algorithms, DBSCAN does not require the number of clusters to be specified in 
                        advance, making it particularly useful for datasets where the number of clusters is unknown or varies.
                        DBSCAN works by grouping together closely packed data points based on their density in the 
                            feature space. 
                    </li>
                    <br/>
                    <li>    
                        It defines two parameters: epsilon (ε), which specifies the radius of the neighborhood 
                        around each point, and minPts, which specifies the minimum number of points required to form a 
                        dense region (core point). 
                        The algorithm iterates through each data point, identifying core points, border points 
                        (points within the neighborhood of a core point but with fewer than minPts neighbors), 
                        and noise points (points that are neither core nor border points). 
                    </li>
                    <br/>
                    <li>
                        By connecting core points that are reachable from each other, DBSCAN forms clusters while also identifying outliers as noise points.
                        This approach makes DBSCAN robust to noise and capable of discovering clusters of arbitrary shapes and sizes within the dataset.
                    </li>
                </ul>
            </div>        
        </div>
        <div class="holding-images">
            <img src="{{asset('images/dbscanall.png')}}" alt="About DBSCAN algorithm">
            <div class="image-subtitle">
                Clustering through DBSCAN Algorithm
            </div>
        </div>
        <div class="algo-dividor"></div>
        <div class="algo-head-section">
            <div class="algo-heading-title">
                SUITABILITY OF DBSCAN ALGORITHM FOR ANOMALY DETECTION
            </div>
        </div>
        <div class="algo-content-section">
            <div class="what-algo-section">
                <ul>
                    <li>
                        DBSCAN is robust to noise due to its ability to identify outliers as noise points. Anomalies in data often manifest 
                        as noise points that do not conform to the general patterns observed in the dataset. DBSCAN can effectively 
                        distinguish these anomalies from normal data points by categorizing them as noise points, thus making it suitable 
                        for detecting anomalies in noisy datasets.
                    </li>
                    <br/>
                    <li>
                        DBSCAN is capable of identifying clusters of arbitrary shapes and sizes within the dataset. Anomalies may exhibit 
                        irregular patterns or occur in regions of varying densities. DBSCAN's flexibility in clustering allows it to 
                        detect anomalies that deviate from the expected cluster structures, making it adept at anomaly detection tasks 
                        where the shape and size of anomalies are unknown or vary.
                    </li>
                    <br/>
                    <li>    
                        Unlike some traditional anomaly detection methods that rely on labeled data or prior knowledge of anomalies, 
                        DBSCAN does not require prior information about the anomalies in the dataset. It autonomously identifies 
                        anomalies based on deviations in data density and spatial distribution. This unsupervised nature makes DBSCAN 
                        well-suited for anomaly detection tasks where comprehensive labeled datasets are unavailable or impractical to 
                        obtain.
                    </li>
                </ul>
            </div> 
            <div class="algo-dividor"></div>
            <div class="algo-head-section">
                <div class="algo-heading-title">
                    WORKING OF DBSCAN ALGORITHM
                </div>
            </div>
            <div class="working-content-section">
                <div class="sub-working-head">
                    Algorithm Parameters
                </div>
                <div class="algo-param-section">
                    The algorithm relies on two main parameters: epsilon (ε) and minPts.<br/><br/>
                    <ol>
                        <li>
                            <b>Epsilon:</b> 
                            <ul>
                                <li>
                                    Epsilon defines the radius of the neighborhood around each data point.
                                </li>
                                <li>
                                    During the clustering process, DBSCAN considers all data points within this radius as neighbors of the central point.
                                </li>
                                <li>
                                    The value of epsilon determines the proximity threshold for defining a dense region.
                                </li>
                            </ul>
                            <br>
                            <div class="holding-images">
                                <img src="{{asset('images/epsilon.png')}}" alt="About DBSCAN algorithm">
                                <div class="image-subtitle"> 
                                    Epsilon Parameter in DBSCAN Algorithm 
                                </div>
                            </div>
                        </li>
                        <br>
                        <br>
                        <br>
                        <li>
                            <b>MinPts:</b>
                            <ul>
                                <li>
                                    MinPts specifies the minimum number of points required to form a dense region, also known as a core point.
                                </li>
                                <li>
                                    To be considered a core point, a data point must have at least minPts neighbors (including itself) within the epsilon radius.
                                </li>
                                <li>
                                    Points that do not meet this criterion but are within the epsilon radius of a core point are classified as border points
                                </li>
                            </ul>
                            <br>
                            <br>
                            <div class="holding-images">
                                <img src="{{asset('images/minpts.png')}}" alt="About DBSCAN algorithm">
                                <div class="image-subtitle"> 
                                    MinPts Parameter in DBSCAN Algorithm 
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <br>
                <br>
                <br>
                <div class="sub-working-head">
                    How does the DBSCAN Algorithm Work ?
                </div>
                <br>
                <div class="algo-param-section">
                    <ul>
                        <li>The DBSCAN algorithm iterates through each data point in the dataset.</li>
                        <li>For each point, it identifies its neighbors by considering all other points within the epsilon radius.</li>
                        <li>If the number of neighbors is greater than or equal to minPts, the point is classified as a core point.</li>
                        <li>Core points are used to form clusters by recursively expanding the clusters to include directly reachable points.</li>
                        <li>Border points, which are within the epsilon radius of a core point but do not meet the minPts requirement, are assigned to the cluster of their core point neighbor.</li>
                        <li>Points that do not belong to any cluster and do not qualify as core or border points are considered noise points or outliers.</li>
                    </ul>                    
                </div>
                <br>
                <br>
                <br>
                <div class="sub-working-head">
                    Parameter Tuning
                </div>
                <br>
                <div class="algo-param-section">
                    <ul>
                        <li>Selecting appropriate values for epsilon and minPts is crucial for the performance of the DBSCAN algorithm.</li>
                        <li>The choice of epsilon depends on the dataset's characteristics, such as the density of the data points and the expected size of the clusters.</li>
                        <li>Similarly, minPts should be chosen based on the desired sensitivity to noise and the minimum cluster size.</li>
                    </ul>                    
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
</x-app-layout>
