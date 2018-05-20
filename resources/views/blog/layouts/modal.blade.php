<div id="id01" class="wx-modal">
    <div class="wx-modal-content wx-card-4 wx-animate-zoom ">
        <div class="wx-hover-shadow" style="width: 100%">
            <div class="wx-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'"
                      class="wx-button wx-xlarge wx-hover-red wx-display-topright" title="Close Modal">&times;</span>
                <span class="wx-text"><h3>新建博文</h3></span>
            </div>

            <form class="wx-container" method="post" action="/blog/create">
                @csrf
                <div class="wx-section">
                    <label><b>标题</b></label>
                    <input class="wx-input wx-border wx-margin-bottom" type="text" placeholder="请输入标题"
                           name="title" required>
                    <label><b>内容</b></label>
                    <textarea class="wx-input wx-border wx-margin-bottom" style="height: 200px" name="body"
                              id="editor"></textarea>
                    <button class="wx-button wx-block wx-green wx-section wx-padding" type="submit">发布</button>
                </div>
            </form>

            <div class="wx-container wx-border-top wx-padding-16 wx-light-grey">
                <button onclick="document.getElementById('id01').style.display='none'" type="button"
                        class="wx-button wx-red">取消
                </button>
            </div>
        </div>
    </div>
</div>

<div id="id02" class="wx-modal">
    <div class="wx-modal-content wx-card-4 wx-animate-zoom">
        <div class="wx-hover-shadow" style="width: 100%">
            <div class="wx-center"><br>
                <span onclick="document.getElementById('id02').style.display='none'"
                      class="wx-button wx-xlarge wx-hover-red wx-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="wx-container" method="post" action="/blog/find">
                @csrf
                <div class="wx-section">
                    <label><b>搜索</b></label>
                    <input class="wx-input wx-border wx-margin-bottom" type="text" placeholder="请输入搜索内容"
                           name="search" required>
                    <button class="wx-button wx-block wx-green wx-section wx-padding" type="submit">开始搜索</button>
                </div>
            </form>

            <div class="wx-container wx-border-top wx-padding-16 wx-light-grey wx-center">
                <button onclick="document.getElementById('id02').style.display='none'" type="button"
                        class="wx-button wx-red">取消
                </button>
            </div>
        </div>
    </div>
</div>