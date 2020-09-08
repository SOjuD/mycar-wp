const instaWrap = document.querySelector('#instaWrap');
const url = 'https://instagram.com/mycar_selection/?__a=1'


async function getInstaPosts(url){

    if( ! instaWrap ) return;

    const response = await fetch(url);
    
    if(response.ok){
        const json = await response.json();
        const posts = json.graphql.user.edge_owner_to_timeline_media.edges;
        let instaWrapContent = '';
        for(let i = 0; i < 4; i++){
            const post = posts[i];
            const shortcode = post.node.shortcode;
            const link = `https://www.instagram.com/p/${shortcode}`;
            const thumbnailSrc480px = post.node.thumbnail_resources[3].src;
            instaWrapContent += `
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="${link}" target="_blank" rel="author" class="instagram-link">
                        <img src="${thumbnailSrc480px}" alt="mycar" class="instagram-post">
                    </a>
                </div>`;
        };
        instaWrap.innerHTML = instaWrapContent;
    }else{
        instaWrap.innerHTML = `<h4 class="instagram-error" >Ошибка получения данных: ${response.status}<h4>`;
    }
}

getInstaPosts(url);







