<?php include("header.php"); ?>

<form action="send_request.php" method="post">
    <div class="form-group">
        <label for="n_tokens_title">Number of words in the title:</label>
        <input type="text" class="form-control" id="n_tokens_title" name="n_tokens_title">
    </div>
    <div class="form-group">
        <label for="n_tokens_content">Number of words in the content:</label>
        <input type="text" class="form-control" id="n_tokens_content" name="n_tokens_content">
    </div>
    <div class="form-group">
        <label for="n_unique_tokens">Rate of unique words in the content:</label>
        <input type="text" class="form-control" id="n_unique_tokens" name="n_unique_tokens">
    </div>
    <div class="form-group">
        <label for="n_non_stop_words">Rate of non-stop words in the content:</label>
        <input type="text" class="form-control" id="n_non_stop_words" name="n_non_stop_words">
    </div>
    <div class="form-group">
        <label for="n_non_stop_unique_tokens">Rate of unique non-stop words in the content:</label>
        <input type="text" class="form-control" id="n_non_stop_unique_tokens" name="n_non_stop_unique_tokens">
    </div>
    <div class="form-group">
        <label for="num_hrefs">Number of links:</label>
        <input type="text" class="form-control" id="num_hrefs" name="num_hrefs">
    </div>
    <div class="form-group">
        <label for="num_self_hrefs">Number of links to other articles published by Mashable:</label>
        <input type="text" class="form-control" id="num_self_hrefs" name="num_self_hrefs">
    </div>
    <div class="form-group">
        <label for="num_imgs">Number of images:</label>
        <input type="text" class="form-control" id="num_imgs" name="num_imgs">
    </div>
    <div class="form-group">
        <label for="num_videos">Number of videos:</label>
        <input type="text" class="form-control" id="num_videos" name="num_videos">
    </div>
    <div class="form-group">
        <label for="average_token_length">Average length of the words in the content:</label>
        <input type="text" class="form-control" id="average_token_length" name="average_token_length">
    </div>
    <div class="form-group">
        <label for="num_keywords">Number of keywords in the metadata:</label>
        <input type="text" class="form-control" id="num_keywords" name="num_keywords">
    </div>
    <div class="form-group radio-group">
        <label>Data channel:</label><br>
        <label><input type="radio" name="data_channel" value="Lifestyle" checked>Lifestyle</label>
        <label><input type="radio" name="data_channel" value="Entertainment">Entertainment</label>
        <label><input type="radio" name="data_channel" value="Business">Business</label>
        <label><input type="radio" name="data_channel" value="Social Media">Social Media</label>
        <label><input type="radio" name="data_channel" value="Tech">Tech</label>
        <label><input type="radio" name="data_channel" value="World">World</label>
    </div>
    <div class="form-group">
        <label for="kw_min_min">Worst keyword (min. shares):</label>
        <input type="text" class="form-control" id="kw_min_min" name="kw_min_min">
    </div>
    <div class="form-group">
        <label for="kw_max_min">Worst keyword (max. shares):</label>
        <input type="text" class="form-control" id="kw_max_min" name="kw_max_min">
    </div>
    <div class="form-group">
        <label for="kw_avg_min">Worst keyword (avg. shares):</label>
        <input type="text" class="form-control" id="kw_avg_min" name="kw_avg_min">
    </div>
    <div class="form-group">
        <label for="kw_min_max">Best keyword (min. shares):</label>
        <input type="text" class="form-control" id="kw_min_max" name="kw_min_max">
    </div>
    <div class="form-group">
        <label for="kw_max_max">Best keyword (max. shares):</label>
        <input type="text" class="form-control" id="kw_max_max" name="kw_max_max">
    </div>
    <div class="form-group">
        <label for="kw_avg_max">Best keyword (avg. shares):</label>
        <input type="text" class="form-control" id="kw_avg_max" name="kw_avg_max">
    </div>
    <div class="form-group">
        <label for="kw_min_avg">Avg. keyword (min. shares):</label>
        <input type="text" class="form-control" id="kw_min_avg" name="kw_min_avg">
    </div>
    <div class="form-group">
        <label for="kw_max_avg">Avg. keyword (max. shares):</label>
        <input type="text" class="form-control" id="kw_max_avg" name="kw_max_avg">
    </div>
    <div class="form-group">
        <label for="kw_avg_avg">Avg. keyword (avg. shares):</label>
        <input type="text" class="form-control" id="kw_avg_avg" name="kw_avg_avg">
    </div>
    <div class="form-group">
        <label for="self_reference_min_shares">Min. shares of referenced articles in Mashable:</label>
        <input type="text" class="form-control" id="self_reference_min_shares" name="self_reference_min_shares">
    </div>
    <div class="form-group">
        <label for="self_reference_max_shares">Max. shares of referenced articles in Mashable:</label>
        <input type="text" class="form-control" id="self_reference_max_shares" name="self_reference_max_shares">
    </div>
    <div class="form-group">
        <label for="self_reference_avg_sharess">Avg. shares of referenced articles in Mashable:</label>
        <input type="text" class="form-control" id="self_reference_avg_sharess" name="self_reference_avg_sharess">
    </div>
    <div class="form-group radio-group">
        <label>Day on which the article was published:</label><br>
        <label><input type="radio" name="publish_day" value="Monday" checked>Monday</label>
        <label><input type="radio" name="publish_day" value="Tuesday">Tuesday</label>
        <label><input type="radio" name="publish_day" value="Wednesday">Wednesday</label>
        <label><input type="radio" name="publish_day" value="Thursday">Thursday</label>
        <label><input type="radio" name="publish_day" value="Friday">Friday</label>
        <label><input type="radio" name="publish_day" value="Saturday">Saturday</label>
        <label><input type="radio" name="publish_day" value="Sunday">Sunday</label>
    </div>
    <div class="form-group">
        <label for="LDA_00">Closeness to LDA topic 0:</label>
        <input type="text" class="form-control" id="LDA_00" name="LDA_00">
    </div>
    <div class="form-group">
        <label for="LDA_01">Closeness to LDA topic 1:</label>
        <input type="text" class="form-control" id="LDA_01" name="LDA_01">
    </div>
    <div class="form-group">
        <label for="LDA_02">Closeness to LDA topic 2:</label>
        <input type="text" class="form-control" id="LDA_02" name="LDA_02">
    </div>
    <div class="form-group">
        <label for="LDA_03">Closeness to LDA topic 3:</label>
        <input type="text" class="form-control" id="LDA_03" name="LDA_03">
    </div>
    <div class="form-group">
        <label for="LDA_04">Closeness to LDA topic 4:</label>
        <input type="text" class="form-control" id="LDA_04" name="LDA_04">
    </div>
    <div class="form-group">
        <label for="global_subjectivity">Text subjectivity:</label>
        <input type="text" class="form-control" id="global_subjectivity" name="global_subjectivity">
    </div>
    <div class="form-group">
        <label for="global_sentiment_polarity">Text sentiment polarity:</label>
        <input type="text" class="form-control" id="global_sentiment_polarity" name="global_sentiment_polarity">
    </div>
    <div class="form-group">
        <label for="global_rate_positive_words">Rate of positive words in the content:</label>
        <input type="text" class="form-control" id="global_rate_positive_words" name="global_rate_positive_words">
    </div>
    <div class="form-group">
        <label for="global_rate_negative_words">Rate of negative words in the content:</label>
        <input type="text" class="form-control" id="global_rate_negative_words" name="global_rate_negative_words">
    </div>
    <div class="form-group">
        <label for="rate_positive_words">Rate of positive words among non-neutral tokens:</label>
        <input type="text" class="form-control" id="rate_positive_words" name="rate_positive_words">
    </div>
    <div class="form-group">
        <label for="rate_negative_words">Rate of negative words among non-neutral tokens:</label>
        <input type="text" class="form-control" id="rate_negative_words" name="rate_negative_words">
    </div>
    <div class="form-group">
        <label for="avg_positive_polarity">Avg. polarity of positive words:</label>
        <input type="text" class="form-control" id="avg_positive_polarity" name="avg_positive_polarity">
    </div>
    <div class="form-group">
        <label for="min_positive_polarity">Min. polarity of positive words:</label>
        <input type="text" class="form-control" id="min_positive_polarity" name="min_positive_polarity">
    </div>
    <div class="form-group">
        <label for="max_positive_polarity">Max. polarity of positive words:</label>
        <input type="text" class="form-control" id="max_positive_polarity" name="max_positive_polarity">
    </div>
    <div class="form-group">
        <label for="avg_negative_polarity">Avg. polarity of negative  words:</label>
        <input type="text" class="form-control" id="avg_negative_polarity" name="avg_negative_polarity">
    </div>
    <div class="form-group">
        <label for="min_negative_polarity">Min. polarity of negative  words:</label>
        <input type="text" class="form-control" id="min_negative_polarity" name="min_negative_polarity">
    </div>
    <div class="form-group">
        <label for="max_negative_polarity">Max. polarity of negative  words:</label>
        <input type="text" class="form-control" id="max_negative_polarity" name="max_negative_polarity">
    </div>
    <div class="form-group">
        <label for="title_subjectivity">Title subjectivity:</label>
        <input type="text" class="form-control" id="title_subjectivity" name="title_subjectivity">
    </div>
    <div class="form-group">
        <label for="title_sentiment_polarity">Title polarity:</label>
        <input type="text" class="form-control" id="title_sentiment_polarity" name="title_sentiment_polarity">
    </div>
    <div class="form-group">
        <label for="abs_title_subjectivity">Absolute subjectivity level:</label>
        <input type="text" class="form-control" id="abs_title_subjectivity" name="abs_title_subjectivity">
    </div>
    <div class="form-group">
        <label for="abs_title_sentiment_polarity">Absolute polarity level:</label>
        <input type="text" class="form-control" id="abs_title_sentiment_polarity" name="abs_title_sentiment_polarity">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit" data-toggle="tooltip" title="All fields must be filled with numeric values." disabled>Submit</button>
</form>

<?php include("footer.php"); ?>
