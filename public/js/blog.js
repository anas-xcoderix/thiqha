const blogs = [
    {
        id: 1,
        title: "The Future of Smart Construction",
        date: "April 24, 2022",
        readTime: "5 min read",
        img: "img/hero.png",
        fallbackImg: "img/hero.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
      `,
        relevantIds: [2, 3, 4]
    },
    {
        id: 2,
        title: "Safety Standards in Modern Projects",
        date: "April 20, 2022",
        readTime: "4 min read",
        img: "img/img_1.png",
        fallbackImg: "img/img_1.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      `,
        relevantIds: [1, 3, 5]
    },
    {
        id: 3,
        title: "Engineering Excellence & Innovation",
        date: "April 18, 2022",
        readTime: "6 min read",
        img: "img/img_2.png",
        fallbackImg: "img/img_2.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
      `,
        relevantIds: [1, 4, 6]
    },
    {
        id: 4,
        title: "Sustainable Building Materials",
        date: "April 15, 2022",
        readTime: "5 min read",
        img: "img/hero.png",
        fallbackImg: "img/hero.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">Various versions have evolved over the years, sometimes by accident, sometimes on purpose. It is a long established fact that a reader will be distracted by the readable content of a page.</p>
      `,
        relevantIds: [2, 5, 7]
    },
    {
        id: 5,
        title: "Infrastructure Development Trends",
        date: "April 12, 2022",
        readTime: "7 min read",
        img: "img/img_1.png",
        fallbackImg: "img/img_1.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Various versions have evolved over the years, sometimes by accident.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
      `,
        relevantIds: [3, 6, 8]
    },
    {
        id: 6,
        title: "Project Management Best Practices",
        date: "April 10, 2022",
        readTime: "4 min read",
        img: "img/img_2.png",
        fallbackImg: "img/img_2.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
      `,
        relevantIds: [4, 7, 9]
    },
    {
        id: 7,
        title: "Digital Transformation in Construction",
        date: "April 7, 2022",
        readTime: "5 min read",
        img: "img/hero.png",
        fallbackImg: "img/hero.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">Various versions have evolved over the years, sometimes by accident. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      `,
        relevantIds: [5, 8, 9]
    },
    {
        id: 8,
        title: "Urban Planning & Smart Cities",
        date: "April 5, 2022",
        readTime: "6 min read",
        img: "img/img_1.png",
        fallbackImg: "img/img_1.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
      `,
        relevantIds: [6, 7, 9]
    },
    {
        id: 9,
        title: "Worker Safety & Health Guidelines",
        date: "April 2, 2022",
        readTime: "3 min read",
        img: "img/img_2.png",
        fallbackImg: "img/img_2.png",
        body: `
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here'.</p>
        <h2 class="text-[32px] font-bold text-gray-900 mb-3 text-[#20395d]">Lorom ipsum dolor</h2>
        <p class="text-[16px] text-gray-500 mb-6">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted.</p>
      `,
        relevantIds: [1, 7, 8]
    }
];

function getBlog(id) {
    return blogs.find(b => b.id === id);
}

function showDetail(id) {
    const blog = getBlog(id);
    if (!blog) return;

    document.getElementById('page-list').classList.add('hidden');
    document.getElementById('page-list').classList.remove('block');

    const old = document.getElementById('page-detail');
    if (old) old.remove();

    const relHtml = blog.relevantIds.map(rid => {
        const rb = getBlog(rid);
        if (!rb) return '';
        return `
        <div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 cursor-pointer" onclick="showDetail(${rb.id})">
          <div class="overflow-hidden h-[180px]">
            <img src="${rb.img}" alt="${rb.title}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.src='${rb.fallbackImg}'"/>
          </div>
          <div class="p-4">
            <h4 class="text-sm font-bold text-gray-900 text-center mb-1">${rb.title}</h4>
            <p class="text-xs text-gray-400 text-center mb-2">${rb.date} · ${rb.readTime}</p>
            <p class="text-xs text-gray-600 text-center line-clamp-2">Nunc non posuere consectetur, justo nisl tempor ante, non hendrerit dui odio id.</p>
          </div>
        </div>
      `;
    }).join('');

    const detailDiv = document.createElement('div');
    detailDiv.id = 'page-detail';
    detailDiv.classList.add('block');
    detailDiv.innerHTML = `
      <section class="p-6 w-full box-border">
        <main class="relative rounded-[40px] overflow-hidden shadow-2xl flex flex-col" style="min-height:400px;">
          <div class="absolute inset-0 z-0">
            <img src="${blog.img}" class="w-full h-full object-cover" alt="${blog.title}" onerror="this.src='${blog.fallbackImg}'"/>
            <div class="absolute inset-0 bg-black/45"></div>
          </div>
          <div class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6 py-28">
            <h1 class="text-white text-3xl md:text-[56px] font-bold leading-tight tracking-tight">${blog.title}</h1>
          </div>
        </main>
      </section>

      <section class="container mx-auto px-4 sm:px-6 lg:px-12 py-10 max-w-[90%]">

        <div class="flex items-center gap-1 mb-6">
          <a href="#" onclick="goHome(); return false;" class="text-[#A7A7A7] text-[29px] no-underline hover:text-[#20395d]">Home</a>
          <span class="text-[#A7A7A7] text-[29px] mx-1.5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <a href="#" onclick="goHome(); return false;" class="text-[#A7A7A7] text-[29px] no-underline hover:text-[#20395d]">Blogs</a>
          <span class="text-[#A7A7A7] text-[29px] mx-1.5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="#A8A8A8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <span class="text-[#20395d] text-[29px] font-medium">${blog.title}</span>
        </div>



        <h1 class="text-[40px] font-bold text-gray-900 mb-2">${blog.title}</h1>
        <p class="text-[20px] text-gray-400 mb-8">${blog.date} · ${blog.readTime}</p>

        <div>
          ${blog.body}
        </div>

      </section>

      <section class="max-w-[90%] mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-[40px] font-bold text-gray-900 mb-6">Relevant Blogs</h2>
        <div class="cards grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          ${relHtml}
        </div>
      </section>
    `;

    document.getElementById("app").appendChild(detailDiv);
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function goHome() {
    const detail = document.getElementById('page-detail');
    if (detail) detail.remove();
    document.getElementById('page-list').classList.remove('hidden');
    document.getElementById('page-list').classList.add('block');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
