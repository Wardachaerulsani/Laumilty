 <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2022 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Warda Chaerul Sani</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('assets')}}/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('assets')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets')}}/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{asset('assets')}}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{asset('assets')}}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{asset('assets')}}/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{asset('assets')}}/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets')}}/js/argon.js?v=1.2.0"></script>
    <!-- Datatables -->
    <script src="{{asset('vendors')}}/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('vendors')}}/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('vendors')}}/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('vendors')}}/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('vendors')}}/pdfmake/build/vfs_fonts.js"></script>
</body>
@stack('script')
</html>