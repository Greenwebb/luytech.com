<div class="module__search-container">
    <i class="fa fa-times close-search"></i>
    <form action="{{route('tracker.index')}}" method="POST" class="module__search-form">
        @csrf
        <input type="text" required name="tracker_id" class="search__input" placeholder="Tracker ID">
        <button type="submit" class="module__search-btn"><i class="fa fa-search"></i></button>
    </form>
</div><!-- /.module-search-container -->