<div class="category-btn category-hover-header">
    <!-- <img class="parent" src="assets/images/icons/bar-1.svg" alt="icons"> -->
    <span>All Categories</span>
    <ul class="category-sub-menu" id="category-active-four">
        <li>
            
        </li>
    </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 <script>
    Category();

    async function Category(){
        try {
            let res = await axios.get("{{ url('/category-list') }}");
            $("#category-active-four").empty();

            res.data['data'].forEach((item, i) => {
                let EachItem = `
                <li>
                    <a href="#" class="menu-item">
                        <img style="width:50px;" src="${item['categoryImg']}" alt="${item['categoryImg']}" onerror="this.onerror=null;this.src='assets/images/icons/01.svg';">
                        <span>${item['categoryName']}</span>
                        <i class="fa-regular fa-plus"></i>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="#">Subcategory 1</a></li>
                        <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                        <li><a class="mobile-menu-link" href="#">Pumking</a></li>
                    </ul>
                </li>`;

                $("#category-active-four").append(EachItem);
                console.log(EachItem);
            });

        } catch (error) {
            console.error("Error fetching categories:", error);
        }
    }
</script> 
