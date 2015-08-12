
// @GENERATOR:play-routes-compiler
// @SOURCE:/Users/Pargol/Documents/dev/Hospital-Management-System/website/conf/routes
// @DATE:Wed Aug 12 11:15:13 EDT 2015


package router {
  object RoutesPrefix {
    private var _prefix: String = "/"
    def setPrefix(p: String): Unit = {
      _prefix = p
    }
    def prefix: String = _prefix
    val byNamePrefix: Function0[String] = { () => prefix }
  }
}
